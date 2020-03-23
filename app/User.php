<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'apellido', 'cedula', 'mobile' , 'email', 'type' ,'password' , 'imagen', 'ruta'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

     public function articles()
    {
        return $this->hasMany('App\Article');
    }

    //relación muchos a muchos!!!!
        public function actividades()
        {
        	return $this->belongsToMany('App\Actividad')->withTimestamps();
        }
    //-------------------------//

    public function scopeBuscar_Usuario($query, $name)
    {
        if (trim($name) != "") {
                return $query->where('cedula','like',"%$name%")->orWhere('name','like',"%$name%")->orWhere('apellido','like',"%$name%")->orWhere('email','like',"%$name%")->orWhere('type','like',"%$name%");
            }
    }

}