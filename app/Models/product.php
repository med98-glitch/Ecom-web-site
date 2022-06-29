<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;
use App\Models\category;
use App\Models\stock;
use App\Models\tag;

class product extends Model
{
    use HasFactory;
    protected $fillable = ['id','name','description','price','ratting','id_category','id_image'];
    public function categorie(){
        return $this->belongsTo(category::class,'id');
    }
   
    public function getPictureAttribute()
    {
        return Voyager::image($this->img);
    }
    //relation ship
    //products with stock
    public function stock(){
       return  $this->hasOne(stock::class);
    }
    public function tag()
    {
        return $this->hasMany(Tag::class);
    }
}
