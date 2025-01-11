<?php

namespace App\Models;

use App\Models\Warga;
use App\Models\Bantuan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class wargabantuan extends Model
{
    use HasFactory;
    protected $fillable=['warga_id','bantuan_id'];

    public function warga():BelongsTo{
        return $this->belongsTo(Warga::class,'warga_id','id');
    }
    public function bantuan():BelongsTo{
        return $this->belongsTo(Bantuan::class,'bantuan_id','id');
    }
}
