<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarBantuan extends Model
{
    use HasFactory;

    protected $table = 'daftar_bantuan';
    
    protected $fillable = [
        'tahun',
        'jenis_bantuan'
    ];
}
