<?php

namespace App\Console\Commands;

use App\Models\Offer;
use App\Models\Partner;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:test-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        $offers = Offer::all();
        $partners = Partner::all();
        DB::beginTransaction();
        foreach ($offers as $offer) {
            $media = $offer->getMedia('image')->first();
            $offer->addMediaFromUrl($media->getUrl())
                ->toMediaCollection('image');
            $media->delete();
        }

        foreach ($partners as $partner) {
            $media = $partner->getMedia('image')->first();
            $partner->addMediaFromUrl($media->getUrl())
                ->toMediaCollection('image');
            $media->delete();
        }

        DB::commit();
    }
}
