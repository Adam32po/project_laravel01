<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //kita masukan tabel yang kita gunakan
    protected $table = 'items';

    //kolom kolom yang diizinkan utk diisi lewat form
    protected $fillable = [
    'code',
    'item_name',
    'category',
    'stok',
    'condition',
    'room_location'
    ];
}
