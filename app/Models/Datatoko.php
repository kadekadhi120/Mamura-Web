<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datatoko extends Model
{
    protected $table = 'datatoko';
    protected $fillable = ['Nama_Toko','Alamat','Logo','SellerID'];

    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }
}
