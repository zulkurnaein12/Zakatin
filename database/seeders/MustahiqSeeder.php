<?php

namespace Database\Seeders;

use App\Models\Mustahiq;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MustahiqSeeder extends Seeder
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
                'nama' => $faker->name(),
                'alamat' => $faker->address(),
                'kategori' => $faker->randomElement(['Fakir', 'Miskin', 'Amil', 'Muallaf', 'Gharim', 'Riqab', 'Fisabilillah', 'Ibnu Sabil']),
                'jenkel' => $faker->randomElement(['LAKI-LAKI', 'PEREMPUAN']),
                'no_tlp' => $faker->phoneNumber()
            ];

            Mustahiq::create($data);
        }
    }
}
