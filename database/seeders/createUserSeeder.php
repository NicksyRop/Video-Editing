<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class createUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {



        User::create([

            'email' => 'kipkorirnickson45@gmail.com',
            'name' => 'Nickson Kipkorir',
            'avatar' => 'files/never-stop-exploring-signboard-954662-1200x900.jpg',
            'duty' => 'Freelancer',

            'email_verified_at' =>'2021-04-27 13:26:28' ,

            'password' => Hash::make('password')
        ]);

        User::create([

            'email' => 'nickson45@gmail.com',
            'name' => 'NickKipkorir',
            'avatar' => 'files/never-stop-exploring-signboard-954662-1200x900.jpg',
            'duty' => 'Freelancer',
            'email_verified_at' =>'2021-04-27 13:26:28' ,

            'password' => Hash::make('password')
        ]);


        User::create([

            'email' => 'nicksonkipkorir25@gmail.com',
            'avatar' => 'files/never-stop-exploring-signboard-954662-1200x900.jpg',
            'name' => 'rop',
            'duty' => 'Client',
            'email_verified_at' =>'2021-04-27 13:26:28' ,
            'password' => Hash::make('password')
        ]);

    }
}
