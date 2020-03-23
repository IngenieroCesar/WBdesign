<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Image;
use App\Article;
use App\Content;
use App\Galery;

class ViewsController extends Controller
{
    /**
     *ESTE CONTROLADOR ESTA DISEÑADO PARA CREAR TODAS LAS RUTAS
     */

        public function index_web()
    {
        $images = Image::all();
        $images->each(function($images){
            $images->article;
        });

        $contents = Content::all();
        $galeries = Galery::all();
        return view('welcome')->with('galeries', $galeries)
                              ->with('images', $images)
                              ->with('contents', $contents);
    }

    //--------- Contabilidad -----------//

    public function index_contabilidad()
    {

        return view('admin.office.index');
    }


    //--------- Proyectos -----------//

    public function index_proyects()
    {
        return view('proyects.index');
    }

    public function demo_plataform()
    {
        return view('demo');
    }



}
