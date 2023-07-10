<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class MuzakkiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for ($i = 0; $i < 10; $i++) {
            # code...
            $data = [
                'name' => $faker->name(),
                'email' => $faker->email(),
                'no_tlp' => $faker->phoneNumber(),
                'alamat' => $faker->address(),
                'password' => Hash::make('12345678'),
            ];

            $user = User::create($data);
            $user->assignRole('pengurus');
        }
    }
}
