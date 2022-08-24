<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name'=>'Pepito',
            'email'=>'pepitoperez@gmail.com',
            'password'=>bcrypt('123456789')
        ])->assignRole('Admin');  
        User::create([
            'name'=>'Angela',
            'email'=>'angelaperez@gmail.com',
            'password'=>bcrypt('123456789')
        ])->assignRole('Encargado');  
        User::create([
            'name'=>'Diego',
            'email'=>'diegoperez@gmail.com',
            'password'=>bcrypt('123456789')
        ])->assignRole('Usuario');  

    }
}

