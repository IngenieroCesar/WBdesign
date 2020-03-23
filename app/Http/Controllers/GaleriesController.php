<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Galery;
use Laracasts\Flash\Flash;
//necesario para thumbnail
use Illuminate\Support\Facades\Input;

class GaleriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $images = Galery::orderBy('id','DESC')->paginate(8);
        return view('admin.myweb.galeries.index')->with('images', $images);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.myweb.galeries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
public function store(Request $request)
    {
         if ($request->file('file')) 
        {
            $i=0;
            $dir = public_path().'/Imagenes/Galerias/';
            $dir_thumb = public_path().'/Imagenes/Galerias/Thumbs/';
            
            $files = Input::file('file');
            foreach ($files as $file) {

                //Creamos una instancia de la libreria instalada   
                $image = \Image::make($file);
                $image->fit(600,500);
                
                $fileName = 'wbPlataform_' . time() . $file->getClientOriginalName(); 
                $fileName_thumb = 'thumb_' . time() . $file->getClientOriginalName();        
                $img = new Galery();
                $img->user_id =\Auth::user()->id;
                $img->name = $fileName;
                $img->thumb = $fileName_thumb;
                $img->ruta = $dir . $fileName;
                $img->ruta_thumb = $dir_thumb . $fileName_thumb;

                $file->move($dir, $fileName);

                $img->save();

                $image->save($dir_thumb. $fileName_thumb);


                
            }
        }
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
        $imagen = Galery::find($id);

        return view('admin.myweb.galeries.edit')->with('imagen', $imagen);;
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
         $imagen = Galery::find($id);


        if ($request->file('imagen')) 
        {
            if (unlink($imagen->ruta)) {
                unlink($imagen->ruta_thumb);

                $file = Input::file('imagen');
                //Creamos una instancia de la libreria instalada   
                $image = \Image::make(\Input::file('imagen'));

                $filename = 'wbPlataform_' . time() . $file->getClientOriginalName(); 
                $file_thumb = 'thumb_' . time() . $file->getClientOriginalName(); 
                $path = public_path(). '/Imagenes/Galerias/';
                $path_thumb = public_path().'/Imagenes/Galerias/Thumbs/';

                // Guardar
                $name = $filename;

                $image->save($path. $name);

                $name_thumb = $file_thumb;
                // Cambiar de tamaño
                $image->fit(600,500);
                // Guardar
                $image->save($path_thumb. $name_thumb); 

                $imagen->name = $filename;
                $imagen->thumb = $file_thumb;
                $imagen->ruta = $path . $filename;
                $imagen->ruta_thumb = $path_thumb . $file_thumb;  
                $imagen->save();      

            }

            Flash::info('La Imagen ' .$id. ' ha sido actualizada con exito!!');
        }else{
            Flash::info('No se realizo ningun cambio en la imagen ' .$id. ' !!');   
        }

       

        return redirect()->route('admin.myweb.galeries.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $img = Galery::find($id);
        if (unlink($img->ruta)) {
           
            unlink($img->ruta_thumb);     
            $img->delete();

            Flash::error('La imagen: '.$img->id. ' ha sido borrado de manera éxitosa!');

            return redirect()->route('admin.myweb.galeries.index');
        
        }
        else
        return redirect()->route('admin.myweb.galeries.index');


    }
}
