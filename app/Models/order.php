<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $table='orders';
    protected $fillable=[
        'id_user','prenom','nom','ville','adresse','email','phone','total',
    ];

}
