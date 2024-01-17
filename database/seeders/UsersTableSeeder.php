<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
             'name'=>'admin',
            'email'=>'admin123@gmail.com',
            'password'=>bcrypt('123456'),
            'address' =>'Uttara,Dhaka',
            'phone' =>'0171234567'
        ]);
    }
}
