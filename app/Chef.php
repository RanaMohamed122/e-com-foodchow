<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chef extends Model
{
    //
    public function products(){
        return $this->hasMany('App\Product');
    }
    public function reviews(){
        return $this->hasMany('App\Review');
    }

}
