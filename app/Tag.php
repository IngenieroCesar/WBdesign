<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = "tags";

    protected $fillable = ['name'];

//relación muchos a muchos!!!!
    public function articles()
    {
    	return $this->belongsToMany('App\Article')->withTimestamps();
    }

    public function scopeBuscar($query, $name)
    {	
    	if (trim($name) != "") {
				return $query->where('name','like',"%$name%");
    		}	
    }

}
