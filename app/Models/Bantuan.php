<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\Relations\BelongsTo;

class Bantuan extends Model
{
    use HasFactory;
    protected $table='bantuans';
    protected $fillable=['nama_penerima','no_kk','jenis_bantuan'];

}
