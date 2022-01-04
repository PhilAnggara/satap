<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Nama Kepala Sekolah',
            'username' => 'kepalasekolah',
            'email' => 'kepalasekolah@gmail.com',
            // 'profile_pic' => '',
            'role' => 'Kepala Sekolah',
            'approved' => true,
            'password' => Hash::make('Admin123')
        ]);
        User::create([
            'name' => 'Phil Bawole',
            'username' => 'philbawole',
            'email' => 'philbawole@gmail.com',
            // 'profile_pic' => '',
            'role' => 'Operator',
            'approved' => true,
            'password' => Hash::make('Admin123')
        ]);
    }
}
