<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kala extends Model
{
    public $table = "kala";
    public $timestamps=false;
    public function Category(){
        return $this->belongsTo('App\Models\category','categoryid','id');
    }

    public function Images(){
        return $this->hasMany('App\Models\images','id','kalaid');
    }

    public function faktor_kala(){
        return $this->hasMany('App\Models\faktor_kala');
    }

    public function basket(){
        return $this->hasMany('App\Models\basket','id','kalaid');
    }


    public function Comments(){
        return $this->hasMany('App\Models\comments','id','kala_id');
    }

    public function Photos(){
        return $this->morphMany('App\Models\Photos','imageable');
    }
    public function Tags()
    {
        return $this->morphtoMany("App\Models\Tags","taggable");
    }
}
