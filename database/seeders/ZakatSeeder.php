<?php

namespace Database\Seeders;

use App\Models\Zakat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ZakatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'jenis_zakat' => 'Zakat Fitrah',
            'total' => '0',
        ];

        Zakat::create($data);
        $data = [
            'jenis_zakat' => 'Zakat Maal',
            'total' => '0',
        ];

        Zakat::create($data);
    }
}
