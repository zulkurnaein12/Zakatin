<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $data = [
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'alamat' => 'Banjarmasin',
            'no_tlp' => '123456789101112',
            'password' => Hash::make('12345678'),
        ];

        $user = User::create($data);
        $user->assignRole('admin');

        $data = [
            'name' => 'Pengurus',
            'email' => 'pengurus@gmail.com',
            'alamat' => 'Banjarmasin',
            'no_tlp' => '123456789101112',
            'password' => Hash::make('12345678'),
        ];

        $user = User::create($data);
        $user->assignRole('pengurus');

        $data = [
            'name' => 'Muzakki',
            'email' => 'muzakki@gmail.com',
            'alamat' => 'Banjarmasin',
            'no_tlp' => '123456789101112',
            'password' => Hash::make('12345678'),
        ];

        $user = User::create($data);
        $user->assignRole('Muzakki');
    }
}
