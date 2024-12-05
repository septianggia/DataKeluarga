<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('wargas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kepala_keluarga');
           $table->string('no_kk');
           $table->string('alamat');
       
            $table->string('desa');   
            $table->string('kecamatan');   
            $table->string('kabupaten');   
          

            $table->timestamps();
            });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
        {
           
            Schema::dropIfExists('wargas');
        }
};
