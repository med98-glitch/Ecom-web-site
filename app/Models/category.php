<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\product;
use TCG\Voyager\Facades\Voyager;

class category extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'icnos_cod',
    ];
    public function products(){
        return $this->hasMany(product::class,'id');
    }

    public function getPictureAttribute()
    {
        return Voyager::image($this->image);
    }
}