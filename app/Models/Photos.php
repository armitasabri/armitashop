<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class Photos extends Model
{

    use Notifiable;


    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    protected $fillable =[
        'path','imageable_id','imageable_type'
    ];
    public function Imageable(){

        return $this->morphTo();
    }
}
