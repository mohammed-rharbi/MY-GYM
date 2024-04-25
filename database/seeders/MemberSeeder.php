<?php

namespace Database\Seeders;

use App\Models\member;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();

        foreach($users as $user){

            if($user->Role == 'member'){

                member::create([

                    'users_id' => $user->id ,
                    'goal' => 'lose wight',
                    'wight' => '80',
                    'tall' => '175',
                    'image' => 'images/profile.jpg',
                ]);
            }
        }
    }
}
