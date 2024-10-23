<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'فرع جدة الصفا',
            'فرع جدة الحمادية',
        ];

        foreach ($data as $branch) {
            \App\Models\Branch::create([
                'name' => $branch,
            ]);
        }
    }
}
