<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class kelas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kelas = [
            'fakultas' => 'Teknik',
            'prodi' => 'S1 RPL',
            'kelas' => 'ngerusak otak',
            'isi' => 10,
            'created_at' => new \DateTime,
            'updated_at' => null
        ];
       DB::table('table_kelas')->insert($kelas);
    }
}
