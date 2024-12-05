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
        Schema::create('wargabantuans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('warga_id');
            $table->unsignedBigInteger('bantuan_id');
           
            $table->timestamps();
        });

        Schema::table('wargabantuans',function(Blueprint $table){
            $table->foreign('warga_id')->references('id')->on('wargas')->onDelete('cascade');
            $table->foreign('bantuan_id')->references('id')->on('bantuans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wargabantuans');
    }
};
