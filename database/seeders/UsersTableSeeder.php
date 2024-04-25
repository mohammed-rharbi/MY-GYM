<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        

        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('20012001'),
            'Role' => 'admin',
        ]);

        User::create([
            'name' => 'mohammed',
            'email' => 'moha@gmail.com',
            'password' => Hash::make('20012001'),
            'Role' => 'coach',
        ]);

        User::create([
            'name' => 'amine',
            'email' => 'amine@gmail.com',
            'password' => Hash::make('20012001'),
            'Role' => 'member',
        ]);

        
        
    }
}
