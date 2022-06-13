<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;
use App\Models\category;

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
}
