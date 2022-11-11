<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class mahasiswa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mahasiswa = [
            'nim' => '123416',
            'nama' => 'ihza',
            'jurusan' => 'ngerusak otak',
            'prodi' => 'S1 RPL',
            'created_at' => new \DateTime,
            'updated_at' => null
        ];
       DB::table('table_mahasiswa')->insert($mahasiswa);
    }
}
