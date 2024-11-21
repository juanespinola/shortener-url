<?php

namespace App\Models;

use App\Mail\QrCodeMail;
use SimpleSoftwareIO\QrCode\Facades\QrCode as QrCodeGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;


class QrCode extends Model
{
    use HasFactory;

    public static function generateQrCode($content){
        return QrCodeGenerator::size(200)->generate($content);
    }

    public static function sendQrCodeInMail($userEmail, $code) {

        $qrCode = QrCodeGenerator::format('png')
            ->size(150)
            ->generate($code);

        $data["email"] = $userEmail;
        $data["title"] = "Qr Code";
        // $data["code"] = $code;

        $pdf = app()->make('dompdf.wrapper');
        $pdf->loadView('email.QrCodePdf', compact('qrCode'));
        $pdf->stream();

        Mail::send('email.QrCodeTemplate', $data, function($message) use ($data, $pdf){
            $message
                ->to($data["email"], $data["email"])
                ->subject($data["title"])
                ->attachData($pdf->output(), "qrcode.pdf");
        });

    }

}
