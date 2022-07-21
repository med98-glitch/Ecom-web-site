<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\PseudoTypes\True_;

class order extends Model
{
    use HasFactory;
    public $timestamps = True;
    protected $table='orders';
    protected $fillable=[
        'id_user','prenom','nom','ville','adresse','email','phone','total',
    ];

}
