<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    public $timestamps=false; //be in ravesh migan overwrite ke ba public moteghayere Model base ro seda zade va onja true inja ma falsesh kardim, ba in kar create_at va update_at hazf mishe
    
    public function Gender(){
        return $this->belongsTo('App\Models\gender','gender','id'); //gender to jadvale users vasl shode be jadvale gender ba column id
    }

    public function faktor(){
        return $this->hasMany('App\Models\faktor');
    }

    public function basket(){
        return $this->hasMany('App\Models\basket' ,'id','userid');
    }

    public function address(){
        return $this->hasMany('App\Models\address');
    }

    public function Roles(){
        return $this->belongsToMany('App\Models\roles');
    }

    public function takhfif(){
        return $this->hasMany('App\Models\takhfif');
    }
    public function comments(){
        return $this->hasMany('App\Models\comments','id','user_id');
    }
    public function isAdmin(){

        if(isset($this->Roles[0])&& $this->Roles[0]->name=="Administrator"){
            return true;
        }else
        {
            return false;
        }
    }
}
