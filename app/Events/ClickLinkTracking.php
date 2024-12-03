<?php

namespace App\Events;

use App\Models\Link;
use App\Models\LinkTracking;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Stevebauman\Location\Facades\Location;
use Jenssegers\Agent\Agent;

class ClickLinkTracking
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     */
    public function __construct(Link $link)
    {

        $agent = new Agent();
        $ip = env('APP_ENV') == 'local' ? "93.35.145.156" : request()->ip();

        LinkTracking::create([
            "link_id" => $link->id,
            "clicked_at" => now(),
            "ip_address" => $ip,
            "country" => Location::get($ip)->countryName,
            "type_device" => $agent->deviceType(),
        ]);
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('channel-name'),
        ];
    }
}
