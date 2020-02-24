<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    public function Users(){
        return $this->belongsTo('App\Models\users','user_id','id');
    }

    public function Kala(){
        return $this->belongsTo('App\Models\kala','kala_id','id');
    }
    public function tags()
    {
        return $this->morphtoMany("App\Models\Tags","taggable");
    }
}
