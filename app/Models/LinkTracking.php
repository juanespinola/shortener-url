<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Query\Builder;
use function PHPUnit\Framework\isEmpty;

class LinkTracking extends Model
{
    use HasFactory;

    protected $fillable = [
        "link_id",
        "clicked_at",
        "ip_address",
        "country",
        "type_device",
    ];

    public $timestamps = false;

    public function link(): BelongsTo {
        return $this->belongsTo(Link::class);
    }

    public static function clicksForDay($link_id = null, $days){
        try {
            $query = self::select(
                DB::raw('DATE(clicked_at) as date'),
                DB::raw('count(*) as total_clicks')
            )
            ->where('clicked_at', '>=', Carbon::now()->subDays($days)) // Últimos 30 días
            ->whereHas('link', function ($q) {
                if(auth()->check()) {
                    $q->where('user_id', auth()->user()->id); // Asegura que solo tome links del usuario
                }
            })
            ->groupBy(DB::raw('DATE(clicked_at)'))
            ->limit(10);
            if ($link_id) {
                $query->where('link_id', $link_id); // Filtra por link_id si existe
            }

            return $query->get();

        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public static function totalClicksForDay($link_id = null, $days){
        try {
            $query = self::where('clicked_at', '>=', Carbon::now()->subDays($days)) // Últimos 30 días
                ->whereHas('link', function ($q) {
                    if(auth()->check()) {
                        $q->where('user_id', auth()->user()->id); // Asegura que solo tome links del usuario
                    }
                })
                ->select(DB::raw('count(*) as total_clicks'));
            if ($link_id) {
                $query->where('link_id', $link_id); // Filtra por link_id si existe
            }

            return $query->first();

        } catch (\Throwable $th) {
            return request()->json(['error' => $th]);
        }

    }

    public static function clicksForDevices($link_id = null, $days){
        $query = self::select(
            "type_device",
            DB::raw('count(*) as total_clicks')
        )
        ->where('clicked_at', '>=', Carbon::now()->subDays($days)) // Últimos 30 días
        ->whereHas('link', function ($q) {
            if(auth()->check()) {
                $q->where('user_id', auth()->user()->id); // Asegura que solo tome links del usuario
            }
        })
        ->groupBy("type_device")
        ->orderBy('type_device', 'asc');
        if ($link_id) {
            $query->where('link_id', $link_id); // Filtra por link_id si existe
        }

        return $query->get();
    }

    public static function clicksForCountry($link_id = null, $days){
        $query = self::select(
            "country",
            DB::raw('count(*) as total_clicks')
        )
            ->where('clicked_at', '>=', Carbon::now()->subDays($days)) // Últimos 30 días
            ->whereHas('link', function ($q) {
                if(auth()->check()) {
                    $q->where('user_id', auth()->user()->id); // Asegura que solo tome links del usuario
                }
            })
            ->groupBy("country")
            ->orderBy('country', 'asc');
        if ($link_id) {
            $query->where('link_id', $link_id); // Filtra por link_id si existe
        }

        return $query->get();
    }
}
