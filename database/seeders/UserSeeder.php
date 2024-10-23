<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $data = [
            [
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'phone' => '550098064',
                "password" => "123456789",
            ],
        ];
        foreach ($data as $key => $value) {
            User::create($value);
            // }
            $users = User::all();

            foreach ($users as $user) {
                $user->assignRole('admin');
            }
        }
    }
}
