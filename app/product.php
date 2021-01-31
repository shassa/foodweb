<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
class product extends Model
{
    protected $table='products';
     
    public function category(){
        return $this->belongsTo('App\category','cat_id');
    }

    public function order(){
        return $this->hasMany('App\order','id');
    }
}
