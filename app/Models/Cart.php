<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
        use HasFactory;
    protected $table='carts';
    protected $fillable = [
     'id_products',
     'id_user',
     'qte',
     'total_price',
    ];
}
