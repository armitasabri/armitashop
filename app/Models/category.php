<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public $table = "category";
    
    public function kala(){
        return $this->hasMany('app\Models\kala','id','categoryid');
    }
}
