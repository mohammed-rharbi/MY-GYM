<?php

namespace Database\Seeders;

use App\Models\categorie;
use App\Models\class_type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PhpParser\Node\Stmt\Foreach_;

class class_type_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $classes_types= [ 

            'Cardio Blast',
            'Power Yoga',
            'HIIT Circuit',
            'Strength & Conditioning',
            'Zumba Dance',
            'Spin Cycling',
            'Boot Camp',
            'Pilates Fusion',
            'CrossFit Challenge',
            'Kickboxing Fitness',
            'Barre Sculpt',
            'Bodyweight Burn',
            'TRX Suspension',
            'Aqua Aerobics',
            'Flex & Stretch',
            'Core Fusion',
            'Kettlebell Conditioning',
            'Dance Cardio',
            'Functional Fitness',
            'Mindful Movement'
        ,];


        foreach ($classes_types as $type ) {
            
            class_type::create(['name' => $type]);
        }
    }
}
