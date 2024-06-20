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
        Schema::create('datatokos', function (Blueprint $table) {
            $table->id();
            $table->string('Nama_Toko');
            $table->string('Alamat');
            $table->string('Logo')->default('images/default.jpg'); // Default image path
            $table->string('SellerID');

            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datatokos');
    }
};
