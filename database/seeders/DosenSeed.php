<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DosenSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dosens')->insert([
            ['nama' => 'prof',
            'nip' => '105',
            'bidang' => 'IOT'],
            ['nama' => 'pak ayi',
            'nip' => '106',
            'bidang' => 'IOT'],
            ['nama' => 'pak rizki',
            'nip' => '107',
            'bidang' => 'IOT']
        ]);
    }
}
