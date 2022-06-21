<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;

class image extends Model
{
    use HasFactory;

    public function getPictureAttribute()
    {
        return Voyager::image($this->img);
    }
}
