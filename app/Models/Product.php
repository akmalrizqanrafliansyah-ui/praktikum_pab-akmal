<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
class Product extends Model implements HasMedia
{
      use \Spatie\MediaLibrary\InteractsWithMedia;

    protected $table = 'products';
     protected $fillable = [
        'nama_barang',
        'kode_barang',
        'tgl_masuk',
        'quantity',
        'price'
    ];
}
