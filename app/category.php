<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    //
    protected $fillable=['id','name'];

    public function Product(){

        return $this->hasMany('App\Product');

    }


}
