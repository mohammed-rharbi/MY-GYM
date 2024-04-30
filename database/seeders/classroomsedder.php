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
        'image' => 'images/jQMUuaj9Oy1MCUqkPX3S35B61djMuS3imxFCzs3o.jpg',
        'description' => 'High-energy space for dynamic workouts and fitness goals',

       ]);
    
       classroom::create([

        'name' => 'Agoura',
        'image' => 'images/QRvLSzCWqhhzF9fKfwdUqlHqNqJJ7Okdh5HdIqTK.jpg',
        'description' => 'Serene environment for yoga, Pilates, and meditation',


       ]);


       classroom::create([

        'name' => 'Zumba Zone',
        'image' => 'images/AuOmjq0jH5Zn58ooW5VEQauqE5jprdZpQKb5F10b.jpg',
        'description' => 'Energetic setting for dance-filled Zumba sessions',


       ]);

       

       classroom::create([

        'name' => ' HIIT Haven',
        'image' => 'images/Vs7MxwcymawcuVuzD69XbjjcLsp5HB9wYxYD3oG5.jpg',
        'description' => 'Intense area specializing in high-intensity interval training',


       ]);
       

       classroom::create([

        'name' => 'Box Arena',
        'image' => 'images/IUK2SfGISYiMXgxYTQIFs7vdJGAaITRWtwncCZPR.jpg',
        'description' => 'Dedicated space for boxing and kickboxing workouts',

        

       ]);
       

       classroom::create([

        'name' => 'ZenFlex',
        'image' => 'images/bkrDV39FUUxEKH4Ijn4Ez5wYDso6pN3U00ijcWEF.jpg',
        'description' => 'Peaceful room offering yoga and meditation classes',


       ]);
    
      
    }
        
    
}
