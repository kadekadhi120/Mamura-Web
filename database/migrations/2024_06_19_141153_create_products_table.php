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
        Schema::create('products', function (Blueprint $table) {
            $table->id('ProductID');
            $table->string('Nama');
            $table->text('Deskripsi')->nullable();
            $table->decimal('Harga', 10, 2);
            $table->string('FotoProduk', 255)->nullable();
            $table->integer('Stock');
            $table->unsignedBigInteger('SellerID');
            $table->unsignedBigInteger('KategoriID');
            $table->string('TokoID')->nullable();
            $table->timestamp('CreatedAt')->useCurrent();
            $table->timestamp('UpdatedAt')->useCurrent()->useCurrentOnUpdate();
            $table->timestamps();

            $table->foreign('SellerID')
                  ->references('SellerID')
                  ->on('sellers')
                  ->onDelete('cascade');

            $table->foreign('KategoriID')
                  ->references('KategoriID')
                  ->on('categories')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
