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
        Schema::create('tambah_datas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('warga_id');
            $table->string('nama_lengkap');
           $table->string('nik');
           $table->string('jenis_kelamin');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');   
            $table->string('agama');   
            $table->string('pendidikan');   
            $table->string('jenis_pekerjaan');   
            $table->string('golongan_darah')->nullable();  
            $table->string('status_perkawinan');  
            $table->string('tanggal_perkawinan')->nullable();  
            $table->string('status_hubungan_dalam_keluarga');
            $table->string('kewarganegaraan');  
            $table->string('ayah');  
            $table->string('ibu');   
            $table->timestamps();
           
        });

        Schema::table('tambah_datas',function(Blueprint $table){
            $table->foreign('warga_id')->references('id')->on('wargas')->onDelete('cascade');
        });
       
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tambah_datas');
    }
};
