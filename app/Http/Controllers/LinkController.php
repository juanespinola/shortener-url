<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\ClickLinkTracking;
use App\Models\Link;
use App\Models\LinkTracking;
use App\Models\QrCode;
use Illuminate\Support\Facades\App;


class LinkController extends Controller
{
    public function store(Request $request, $locale = 'es')
    {
        // Validar el idioma
        if (! in_array($locale, ['es','en', 'fr', 'it'])) {
            abort(400);
        }

        // Establecer el idioma
        App::setLocale($locale);

        $request->validate([
            'original_url' => 'required|url',
            'no_expire' => 'nullable',
        ]);

        $qr_code = $request->qr_code;
        $no_expire = $request->no_expire;
        $send_email = $request->send_email;

        $qr_code_image = null;

        $shortCode = substr(str_shuffle('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 6);

        Link::create([
            'original_url' => $request->original_url,
            'short_code' => $shortCode,
            'expires_at' => isset($no_expire) ? null : now()->addHours(48),
            'user_id' => auth()->check() ? auth()->user()->id : null,
        ]);

        if($qr_code){
            $qr_code_image = QrCode::generateQrCode($request->original_url);
        }

        return view('responsePage',
            compact('shortCode', 'qr_code', 'no_expire', 'send_email', 'qr_code_image')
        );
    }

    public function redirect($code)
    {
        if(in_array($code, ['login', 'register', 'dashboard', 'getUserLinks', 'contact'])){
            return to_route($code);
        }

        $link = Link::where('short_code', $code)->first();
        if ($link) {
            if ($link->isExpired()) {
                return response()->json(['message' => 'This link has expired.'], 410); // 410 Gone
            }
            $originalUrl = $link->original_url;
            // aqui colocamos la funcion para clickeo
            event(new ClickLinkTracking($link));
        } else {
            return response()->json(['error' => 'URL not found'], 404);
        }

        return view('redirect', compact('originalUrl'));

    }

    public function sendQrCodeInMail(Request $request) {
        $request->validate([
            'user_mail' => 'required|email',
        ]);

        $email = $request->input('user_mail');
        $code = $request->input('qrcode');
        try {
            QrCode::sendQrCodeInMail($email, $code);
            return response()->json(["data" => true], 200);
        } catch (\Throwable $th) {
            throw $th;
            return response()->json(["data" => false], 400);
        }
    }


    public function sendContactMail(Request $request) {

        $request->validate([
            'fullname' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        $fullname = $request->input('fullname');
        $email = $request->input('email');
        $message = $request->input('message');

        try {
            Link::sendContactMail($fullname, $email, $message);
            return response()->json(["data" => true], 200);
        } catch (\Throwable $th) {
            return response()->json(["data" => false], 400);
        }
    }

    public function trackLink(Request $request)
    {
        try {
            $request->validate([
                'search_code' => 'required|url',
            ]);

            $short_code = basename($request->input('search_code'));

            $link = Link::where('short_code', $short_code)->first();

            if (!$link) {
                return response()->json(['message' => 'This link has expired.'], 400);
            }


            $clicksPorDia = LinkTracking::clicksForDay($link->id, $request->input('selectDays'));
            $totalClicksPorDia = LinkTracking::totalClicksForDay($link->id, $request->input('selectDays'));
            $objClicksPorDia = [
                'labels' => $clicksPorDia->pluck('date')->toArray(),
                'data' => $clicksPorDia->pluck('total_clicks')->toArray()
            ];

            $clicksPorDispositivo = LinkTracking::clicksForDevices($link->id, $request->input('selectDays'));
            $objClicksPorDispositivo = [
                'labels' => $clicksPorDispositivo->pluck('type_device')->toArray(),
                'data' => $clicksPorDispositivo->pluck('total_clicks')->toArray()
            ];

            $clicksPorPais = LinkTracking::clicksForCountry($link->id, $request->input('selectDays'));
            $objClicksPorPais = [
                'labels' => $clicksPorPais->pluck('country')->toArray(),
                'data' => $clicksPorPais->pluck('total_clicks')->toArray()
            ];

            return response()->json([
                'totalClicksPorDia' => $totalClicksPorDia,
                'objClicksPorDia' => $objClicksPorDia,
                'objClicksPorDispositivo' => $objClicksPorDispositivo,
                'objClicksPorPais' => $objClicksPorPais
            ], 200);


        } catch (\Throwable $th) {
            response()->json(["message" => "Something went wrong", "data" => $th], 500);
        }
    }

    public function privacy_policy() {
        return view('privacy_policy');
    }
    public function terms_of_use() {
        return view('terms_of_use');
    }
    public function contact_us() {
        return view('contact');
    }

    public function faq() {
        return view('faq');
    }
}
