<?php

namespace App\Console\Commands;

use App\Models\LinkTracking;
use Illuminate\Console\Command;
use App\Models\Link;

class CleanExpiredLinks extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:clean-expired-links';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete or deactivate expired links';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $link = Link::where('expires_at', '<', now())->get();

        foreach ($link as $value) {
            LinkTracking::where('link_id', $value->id)->delete();
            $value->delete();
        }


        $this->info('Expired links cleaned successfully.');
    }
}
