<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelasmodel extends Model
{
    protected $table='table_kelas';
    // protected $fillable = ['nim', 'nama', 'jurusan', 'prodi'];
    protected $guarded = ['id'];
}
