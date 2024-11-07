<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\Relations\BelongsTo;

class Warga extends Model
{
    use HasFactory;
    protected $fillable=['nama_kepala_keluarga','no_kk','alamat','kode_pos','desa','kecamatan','kabupaten','provinsi'];

}
