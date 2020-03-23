<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    //
    protected $table = "actividades";

    protected $fillable = ['titulo', 'fechaIni', 'fechaFin', 'todoeldia', 'color'];


    //relación muchos a muchos!!!!
        public function users()
        {
        	return $this->belongsToMany('App\User')->withTimestamps();
        }

        public function scopeBuscar($query, $name)
        {
          if (trim($name) != "") {
            return $query->where('name','like',"%$name%");
            }
        }
}
