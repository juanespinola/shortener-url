<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\LinkTracking;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUserLinks(){
        try {
            if(auth()->check()){
                $links = Link::where('user_id', auth()->user()->id)
                    ->get();

                return response()->json(["links" => $links], 200);

            } else {
                return redirect('/login');
            }

        } catch (\Throwable $th) {
            response()->json(["message" => "Something went wrong", "data" => $th], 500);
        }
    }


    public function getUserLinkTrackingByCode(Request $request){
        // obtiene todos tracking de links de un usuario pasando un id
        try {
            if(auth()->check()){
                $request->validate([
                    'search_code' => 'required',
                ]);

                $short_code = basename($request->input('search_code'));
                $selectDays = $request->input('selectDays') ? $request->input('selectDays') : 7;

                $link = Link::where('short_code', $short_code)->first();

                if(!$link){
                    return response()->json(['message' => 'This link has expired.'], 400);
                }

                $clicksPorDia = LinkTracking::clicksForDay($link->id, $selectDays);
                $totalClicksPorDia = LinkTracking::totalClicksForDay($link->id, $selectDays);
                $objClicksPorDia = [
                    'labels' => $clicksPorDia->pluck('date')->toArray(),
                    'data' => $clicksPorDia->pluck('total_clicks')->toArray()
                ];

                $clicksPorDispositivo = LinkTracking::clicksForDevices($link->id, $selectDays);
                $objClicksPorDispositivo = [
                    'labels' => $clicksPorDispositivo->pluck('type_device')->toArray(),
                    'data' => $clicksPorDispositivo->pluck('total_clicks')->toArray()
                ];

                $clicksPorPais = LinkTracking::clicksForCountry($link->id, $selectDays);
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

            } else {
                return redirect('/login');
            }
        } catch (\Throwable $th) {
            response()->json(["message" => "Something went wrong", "data" => $th], 500);
        }
    }

    public function getUserLinkTracking(Request $request){
        // obtiene todos tracking de links de un usuario
        try {
            if(auth()->check()){
                $selectDays = $request->input('selectDays') ? $request->input('selectDays') : 7;

                $clicksPorDia = LinkTracking::clicksForDay(null, $selectDays);
                $totalClicksPorDia = LinkTracking::totalClicksForDay(null, $selectDays);
                $objClicksPorDia = [
                    'labels' => $clicksPorDia->pluck('date')->toArray(),
                    'data' => $clicksPorDia->pluck('total_clicks')->toArray()
                ];

                $clicksPorDispositivo = LinkTracking::clicksForDevices(null, $selectDays);
                $objClicksPorDispositivo = [
                    'labels' => $clicksPorDispositivo->pluck('type_device')->toArray(),
                    'data' => $clicksPorDispositivo->pluck('total_clicks')->toArray()
                ];

                $clicksPorPais = LinkTracking::clicksForCountry(null, $selectDays);
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

            } else {
                return redirect('/login');
            }
        } catch (\Throwable $th) {
            response()->json(["message" => "Something went wrong", "data" => $th], 500);
        }
    }
}
