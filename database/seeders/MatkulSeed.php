<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatkulSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('matkul')->insert([
            ['kode_matkul' => '102',
            'nama_matkul' => 'IOT',
            'sks' => '3',
            'nama_dosen' => 'prof'],
            ['kode_matkul' => '101',
            'nama_matkul' => 'Ristek',
            'sks' => '3',
            'nama_dosen' => 'prof'],
            ['kode_matkul' => '10',
            'nama_matkul' => 'Pemro',
            'sks' => '3',
            'nama_dosen' => 'prof'],
        ]);
    }
}
