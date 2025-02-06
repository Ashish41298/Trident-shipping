<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cardbox extends Model
{
    protected $table ="cards";
    protected $fillable = ['title1','title2','content','image'];
}
