<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        User::create([
            'name' => 'Michail',
            'email'=> 'search@example.com',
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Vladislav',
            'email'=> 'post@example.com',
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Sergey',
            'email'=> 'create@example.com',
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'Victor',
            'email'=> 'category@example.com',
            'password' => bcrypt('password'),
        ]);
    }
}
