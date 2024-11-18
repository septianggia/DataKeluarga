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
        Schema::create('bantuans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('warga_id');
            $table->string('nama_penerima');
           $table->string('no_kk');
           $table->string('jenis_bantuan');
            $table->timestamps();
           
        });

        Schema::table('bantuans',function(Blueprint $table){
            $table->foreign('warga_id')->references('id')->on('users')->onDelete('cascade');
        });
       
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::dropIfExists('bantuans');
    }
};
