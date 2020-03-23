<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";

    protected $fillable = ['name'];

    public function articles()
    {
        return $this->hasMany('App\Article');
    }

        public function scopeBuscar($query, $name)
    {	
    	if (trim($name) != "") {
				return $query->where('name','like',"%$name%");
    		}	
    }
}
