<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Om Chauhan',
                'email' => 'om123@gmail.com',
                'password' => Hash::make('12345'),
            ],
            [
                'name' => 'Sachin Bhatiya',
                'email' => 'sachin@gmail.com',
                'password' => Hash::make('12345'),
            ],
        ]);
    }
}
