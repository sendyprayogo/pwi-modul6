<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //inisialisasi table product
    protected $table = 'products';

    //inisialisasi primary key di dalam tabel 
    protected $primaryKey = 'id_product';

    //inisialisasi data yang dapat diisi 
    // protected $fillable = ['nameProduct','stok','harga','category'];

    //inisialisasi data yang TIDAK dapat diisi
    protected $guarded = ['id_product'];
}
