<?php

namespace Database\Seeders;

use App\Models\Coach;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoachSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();        
        
        foreach ($users as $user) {
            
            if($user->Role == 'coach'){

                Coach::create([

                    'users_id' => $user->id ,
                    'description' => 'yoga coach ',
                    'specialization' => 'yoga',
                    'image' => 'images/1713280326_Eldoa-Class-Room-at-B52-Fit-Montreal-Gym-scaled.jpg',

                ]);
            }
        }
    }
}
