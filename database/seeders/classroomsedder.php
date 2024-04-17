<?php

namespace Database\Seeders;

use App\Models\classrom;
use App\Models\classroom;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class classroomsedder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

       classroom::create([

        'name' => 'FitZone',
        'image' => 'images/1713280294_20190405_Ride50_JB_018.JPG',
        'description' => 'High-energy space for dynamic workouts and fitness goals',

       ]);
    
       classroom::create([

        'name' => 'Agoura',
        'image' => 'images/1713280326_Eldoa-Class-Room-at-B52-Fit-Montreal-Gym-scaled.jpg',
        'description' => 'Serene environment for yoga, Pilates, and meditation',


       ]);


       classroom::create([

        'name' => 'Zumba Zone',
        'image' => 'images/1713280654_images.jpeg',
        'description' => 'Energetic setting for dance-filled Zumba sessions',


       ]);

       

       classroom::create([

        'name' => ' HIIT Haven',
        'image' => 'images/1713280723_DFH_Fitness_003-1344x896.jpg',
        'description' => 'Intense area specializing in high-intensity interval training',


       ]);
       

       classroom::create([

        'name' => 'Box Arena',
        'image' => 'images/1713280837_UFC-Gym-Northridge_Heavy-Bag-Area.jpg',
        'description' => 'Dedicated space for boxing and kickboxing workouts',

        

       ]);
       

       classroom::create([

        'name' => 'ZenFlex',
        'image' => 'images/1713280880_future-school-gym.jpg',
        'description' => 'Peaceful room offering yoga and meditation classes',


       ]);
    
      
    }
        
    
}
