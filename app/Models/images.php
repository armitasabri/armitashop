<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class images extends Model
{
    public $table = "images";
    
    public function Kala(){
        return $this->belongsTo('App\Models\kala','kalaid','id');
    }
    public function getImagenameAttribute($value){

        return "app-assets/img/product/feature-product/".$value;
     }
}
