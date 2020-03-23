<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Article extends Model implements SluggableInterface
{

    use SluggableTrait;

    protected $sluggable = [
        'build_from' => 'title',
        'save_to'    => 'slug',
    ];

    protected $table = "articles";

    protected $fillable = ['reference' ,'title' ,'price' ,'iva' ,'content' ,'umeasure' ,'initialinv' ,'totalinv' ,'category_id', 'user_id' ];

     public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function images()
    {
    	return $this->hasMany('App\Image');
    }



//relación muchos a muchos!!!!
    public function tags()
    {
    	return $this->belongsToMany('App\Tag')->withTimestamps();
    }
//Buscardor de articulos!!!!
        public function scopeBuscar_article($query, $title)
    {
            if (trim($title) != "")
            {
               return $query->where('title','like',"%$title%");
            }
    }
}
