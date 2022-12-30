<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'                  => 'Kenneth',
            'email'                 => 'kenneth@gmail.com',
            'gender'                => 'Male',
            'email_verified_at'     =>  now(),
            'password' => bcrypt('password'), // password
            'remember_token' => Str::random(10),
        ])->assignRole('writer', 'admin');
    }
}
