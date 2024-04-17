<?php

namespace Database\Seeders;

use App\Models\categorie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PhpParser\Node\Stmt\Foreach_;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories= [ 

        'Strength Training Tips',
        'Cardio Workouts',
        'Nutrition and Diet',
        'Muscle Building Techniques',
        'Weightlifting Essentials',
        'Functional Fitness',
        'Flexibility and Mobility',
        'Injury Prevention',
        'CrossFit Insights',
        'Bodyweight Exercises',
        'Yoga and Pilates',
        'Sports Performance',
        'HIIT (High-Intensity Interval Training)',
        'Recovery and Regeneration',
        'Exercise Science',
        'Fitness Motivation',
        'Gym Equipment Guides',
        'Exercise Programming',
        'Mind-Body Connection',
        'Fitness for Beginners',];


        foreach ($categories as $category ) {
            
            categorie::create(['name' => $category]);
        }
    }
}
