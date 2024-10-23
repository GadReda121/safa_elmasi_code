<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \Illuminate\Support\Facades\Schema::dropIfExists('country_translations');

        // stop foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::unprepared(file_get_contents(public_path('db/country_translations.sql')));

        $countries = DB::table('country_translations')->get();

        // group by country id and make array of translations
        $countries = $countries->groupBy('country_id')->map(function ($country) {
            return $country->pluck('name', 'locale')->toArray();
        })->toArray();

        foreach ($countries as $country) {
            \App\Models\Country::create([
                'name' => $country['ar'],
            ]);
        }

        // remove table country_translations
        \Illuminate\Support\Facades\Schema::dropIfExists('old_languages');
    }
}

