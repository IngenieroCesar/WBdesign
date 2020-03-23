<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'clients';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nit', 'name', 'empresa', 'address','city', 'email', 'type', 'mobile', 'phone'];


    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['remember_token'];


    public function scopeBuscar_cliente($query, $name)
    {
            if (trim($name) != "")
            {
               return $query->where('nit','like',"%$name%")->orWhere('name','like',"%$name%")->orWhere('empresa','like',"%$name%")->orWhere('email','like',"%$name%")->orWhere('type','like',"%$name%");
            }
    }

}
