<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Warga extends Model
{
    use HasFactory;
    protected $fillable=['nama_kepala_keluarga','no_kk','alamat','desa','kecamatan','kabupaten'];

    public function wargabantuan():HasMany{
        return $this->hasMany(WargaBantuan::class);
    }

}
