<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
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
                'name' => 'Admin',
                'address' => 'Manila',
                'contact_number' => '1234567890',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin'),
                'profile_pic' => 'profile_pics/user-profile-default.jpg',
                'role_id' => 1,
            ],
            [
                'name' => 'Cedric',
                'address' => 'Bulacan',
                'contact_number' => '9876543210',
                'email' => 'cedric@gmail.com',
                'password' => Hash::make('user'),
                'profile_pic' => 'profile_pics/user-profile-default.jpg',
                'role_id' => 2, 
            ],
            [
                'name' => 'Shean',
                'address' => 'Bulacan',
                'contact_number' => '5555555555',
                'email' => 'shean@gmail.com',
                'password' => Hash::make('user'),
                'profile_pic' => 'profile_pics/user-profile-default.jpg',
                'role_id' => 2, 
            ],
        ]);
    }
}
