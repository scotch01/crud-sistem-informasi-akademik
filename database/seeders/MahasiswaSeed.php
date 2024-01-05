<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswas')->insert([
            ['nama' => 'kirakira',
            'nim' => '20017',
            'jurusan' => 'Informatika',
            'angkatan' => '20'],
            ['nama' => 'ipan',
            'nim' => '20012',
            'jurusan' => 'Informatika',
            'angkatan' => '21'],
            ['nama' => 'kurnia',
            'nim' => '20011',
            'jurusan' => 'Informatika',
            'angkatan' => '20'],
        ]);
    }
}
