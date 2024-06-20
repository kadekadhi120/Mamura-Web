<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    protected $primaryKey = 'KategoriID';

    protected $table = 'categories';
    protected $fillable = ['Nama','Foto','Deskripsi'];

    public function products()
    {
        return $this->hasMany(Products::class, 'KategoriID'); // 'KategoriID' adalah foreign key di tabel products
    }
}
