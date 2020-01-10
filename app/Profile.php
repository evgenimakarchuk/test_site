<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public $fillable = ['user_id','phone','address','city','state','about','picture'];
}
