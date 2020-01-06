<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
   
    protected $guarded=[];
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function personne()
    {
        return $this->belongsTo('App\User');
    }


}


