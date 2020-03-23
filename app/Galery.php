<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galery extends Model
{
    protected $table = "galeries";

    protected $fillable = ['name','thumb', 'ruta', 'ruta_thumb' ,'user_id'];

        public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
