<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class soal extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $soal = [
            'nama_mk' => 'Perograman Web lanjut',
            'dosen' => 'Pahrul Irfan, S.Kom, M.Kom',
            'jumlah_soal' => '15',
            'keterangan' => 'hiuglyggyg',
            'created_at' => new \DateTime,
            'updated_at' => null
        ];
       DB::table('soal')->insert($soal);
    }
}
