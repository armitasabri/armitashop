<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    public function Users()
    {
        return $this->morphedByMany("App\Models\users","taggable");
    }

    public function Kala()
    {
        return $this->morphedByMany("App\Models\kala","taggable");
    }
    public function Comments()
    {
        return $this->morphedByMany("App\Models\comments","taggable");
    }
}
