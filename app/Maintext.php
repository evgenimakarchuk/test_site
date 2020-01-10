<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maintext extends Model
{
    public function scopeStatus($query,$url){
        return $query->where('url',$url); 
    }
}
