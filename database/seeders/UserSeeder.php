<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
'name'=>'admin',
'email'=>'tientcheularissaleina@gmail.com',
'password'=>Hash::make('12345678'),
"profile"=>'assets/imgs/home-1/profile.png',
'phone'=>671774509,
'role_id'=>1
        ]);
        User::create([
            'name'=>'martin',
            'email'=>'Bramslevel129@gmail.com',
            'password'=>Hash::make('password'),
            "profile"=>'assets/imgs/home-1/profile.png',
            'phone'=>690394365,
            'role_id'=>3
                    ]);

                    User::create([
                        'name'=>'lunel',
                        'email'=>'Bramslevel@gmail.com',
                        'password'=>Hash::make('password'),
                        'phone'=>653001393,
                        "profile"=>'assets/imgs/home-1/profile.png',
                        'role_id'=>3
                                ]);
                }

    }



