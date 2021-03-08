<?php

namespace Database\Seeders;

use\App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::Create([
            'name' => '',
            'level' => '',
            'email' => '',
            'password' => bcrypt(''),
            'remmeber_token' => Str::random(60),
        ]);
    }
}
