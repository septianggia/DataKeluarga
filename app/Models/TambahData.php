<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\Relations\BelongsTo;

class TambahData extends Model
{
    use HasFactory;
    protected $table='tambah_datas';
    protected $fillable=['nama_lengkap','nik','jenis_kelamin','tempat_lahir','tanggal_lahir','agama','pendidikan','jenis_pekerjaan','golongan_darah','status_perkawinan','tanggal_perkawinan','status_hubungan_dalam_keluarga','kewarganegaraan','ayah','ibu'];

}
