<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $table='orders';

    public function product(){
        return $this->belongsTo('App\product','pro_id');
    }
}
