<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $table = 'products'; // Specify the actual table name if different

    protected $primaryKey = 'ProductID'; // Specify the primary key column name if different
    
    protected $fillable = [
        'Nama',
        'Deskripsi',
        'Harga',
        'Stock',
        'FotoProduk',
        'SellerID',
        'KategoriID'
    ];
    


    public function seller()
    {
        return $this->belongsTo(Seller::class, 'SellerID', 'SellerID');
    }


   

    public function category()
    {
        return $this->belongsTo(Categories::class, 'KategoriID'); // 'KategoriID' adalah foreign key di tabel products
    }

    public function datatoko()
    {
        return $this->belongsTo(Datatoko::class);
    }

}
