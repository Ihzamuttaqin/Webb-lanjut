<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswamodel extends Model
{
    protected $table='table_mahasiswa';
    // protected $fillable = ['nim', 'nama', 'jurusan', 'prodi'];
    protected $guarded = ['id'];
}
