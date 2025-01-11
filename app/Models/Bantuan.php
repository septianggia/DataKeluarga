<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bantuan extends Model
{
    use HasFactory;
    protected $table='bantuans';
    protected $fillable=['tahun','jenis_bantuan'];

    public function wargabantuan():HasMany{
        return $this->hasMany(WargaBantuan::class);
    }
}