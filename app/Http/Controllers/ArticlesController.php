<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
use App\Tag;
use App\Article;
use App\Image;
use Laracasts\Flash\Flash;
use App\Http\Requests\ArticleRequest;
//necesario para thumbnail
use Illuminate\Support\Facades\Input;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $articles = Article::buscar_article($request->title)->orderBy('id','DESC')->paginate(5);

        $articles ->each(function ($articles){
            $articles->category;
            $articles->user;
            $articles->tags;
        });

        return view('admin.articles.index')->with('articles', $articles);

    }

//Tener en cuenta esta función vista, ya que esta enviando todos los datos.
    public function view($id)
    {

      $article = Article::find($id);
      $imagen = Image::find($id);
      $article->category;
      $categories = Category::orderBy('name', 'DESC')->lists('name','id');
      $tags = Tag::orderBy('name', 'DESC')->lists('name','id');

      $my_tags= $article->tags->lists('id')->ToArray();

      return view('admin.articles.view')
                  ->with('categories', $categories)
                  ->with('article', $article)
                  ->with('tags', $tags)
                  ->with('my_tags', $my_tags)
                  ->with('imagen', $imagen);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::orderBy('name', 'ASC')->lists('name','id');
        $categories = Category::orderBy('name', 'ASC')->lists('name','id');
        return view('admin.articles.create')->with('tags', $tags)->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
        /*  Manipulaciòn de archivos  */
        if ($request->file('imagen'))
        {
            $file = Input::file('imagen');
            //Creamos una instancia de la libreria instalada
            $image = \Image::make(\Input::file('imagen'));
            //Ruta donde queremos guardar las imagenes
            $path = public_path().'/Imagenes/Productos/';
            $path_thumb = public_path().'/Imagenes/Productos/Thumbs/';

            // Guardar
            $name = 'wbPlataform_' . time() . '.' . $file->getClientOriginalExtension();

            $image->save($path. $name);

            $name_thumb = 'thumb_' . time() . '.' . $file->getClientOriginalExtension();
            // Cambiar de tamaño
            $image->fit(400,300);
            // Guardar
            $image->save($path_thumb. $name_thumb);
        }

        /*------*/
        $article = new Article($request->all());
        $article->user_id =\Auth::user()->id;
        $article->save();

        $article->tags()->sync($request->tags);

        $image = new Image();
        $image->name = $name;
        $image->thumb = $name_thumb;
        $image->ruta = $path . $name;
        $image->ruta_thumb = $path_thumb . $name_thumb;
        $image->article()->associate($article);
        $image->save();

        flash::success('Se a creado el producto/servicio ' . $article->title . 'de manera exitosa.');
        return redirect()->route('admin.articles.index');

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        $imagen = Image::find($id);
        $article->category;
        $categories = Category::orderBy('name', 'DESC')->lists('name','id');
        $tags = Tag::orderBy('name', 'DESC')->lists('name','id');

        $my_tags= $article->tags->lists('id')->ToArray();

        return view('admin.articles.edit')
                    ->with('categories', $categories)
                    ->with('article', $article)
                    ->with('tags', $tags)
                    ->with('my_tags', $my_tags)
                    ->with('imagen', $imagen);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        $article = Article::find($id);
        $image = Image::find($id);
        $Filename = $image->name;
        $File_thumb = $image->thumb;

        if ($request->file('imagen'))
        {
            if (unlink($image->ruta)) {
                unlink($image->ruta_thumb);

                $file = Input::file('imagen');
                //Creamos una instancia de la libreria instalada
                $image = \Image::make(\Input::file('imagen'));

                $path = public_path(). '/Imagenes/Productos/';
                $path_thumb = public_path().'/Imagenes/Productos/Thumbs/';

                // Guardar
                $name = $Filename;

                $image->save($path. $name);

                $name_thumb = $File_thumb;
                // Cambiar de tamaño
                $image->fit(400,300);
                // Guardar
                $image->save($path_thumb. $name_thumb);

            }



        }



        $article->fill($request->all());
        $article->save();

        $article->tags()->sync($request->tags);

        Flash::warning('El producto ' .$article->title. ' ha sido actualizada con exito!!');

        return redirect()->route('admin.articles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        $img = Image::find($id);

        if (unlink($img->ruta)) {

        $article->delete();

        Flash::error('El producto '.$article->title. ' a sido borrado de manera éxitosa!');

        return redirect()->route('admin.articles.index');

        }


    }
}
