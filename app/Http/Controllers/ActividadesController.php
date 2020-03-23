<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actividad;
use App\Http\Requests;

class ActividadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
      return view('admin.actividades.index');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
      //Valores recibidos via ajax
      $title = $_POST['title'];
      $start = $_POST['start'];
      $back = $_POST['background'];

      //Insertando evento a base de datos
      $evento=new Actividad;
      $evento->fechaIni=$start;
      //$evento->fechaFin=$end;
      $evento->todoeldia=true;
      $evento->color=$back;
      $evento->titulo=$title;

      $evento->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show()
    {
      $data = array(); //declaramos un array principal que va contener los datos
      $id = Actividad::all()->lists('id'); //listamos todos los id de los eventos
      $titulo = Actividad::all()->lists('titulo'); //lo mismo para lugar y fecha
      $fechaIni = Actividad::all()->lists('fechaIni');
      $fechaFin = Actividad::all()->lists('fechaFin');
      $allDay = Actividad::all()->lists('todoeldia');
      $background = Actividad::all()->lists('color');
      $count = count($id); //contamos los ids obtenidos para saber el numero exacto de eventos

      //hacemos un ciclo para anidar los valores obtenidos a nuestro array principal $data
      for($i=0;$i<$count;$i++){
          $data[$i] = array(
              "title"=>$titulo[$i], //obligatoriamente "title", "start" y "url" son campos requeridos
              "start"=>$fechaIni[$i], //por el plugin asi que asignamos a cada uno el valor correspondiente
              "end"=>$fechaFin[$i],
              "allDay"=>$allDay[$i],
              "backgroundColor"=>$background[$i],
              "id"=>$id[$i]
              //"url"=>"cargaEventos".$id[$i]
              //en el campo "url" concatenamos el el URL con el id del evento para luego
              //en el evento onclick de JS hacer referencia a este y usar el método show
              //para mostrar los datos completos de un evento
          );
      }

      json_encode($data); //convertimos el array principal $data a un objeto Json
      return $data; //para luego retornarlo y estar listo para consumirlo
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function update(){
         //Valores recibidos via ajax
         $id = $_POST['id'];
         $title = $_POST['title'];
         $start = $_POST['start'];
         $end = $_POST['end'];
         $allDay = $_POST['allday'];
         $back = $_POST['background'];


         $evento=Actividad::find($id);
         if($end=='NULL'){
             $evento->fechaFin=NULL;
         }else{
             $evento->fechaFin=$end;
         }
         $evento->fechaIni=$start;
         $evento->todoeldia=$allDay;
         $evento->color=$back;
         $evento->titulo=$title;
         //$evento->fechaFin=$end;


         $evento->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy(){
         //Valor id recibidos via ajax
         $id = $_POST['id'];

         Actividad::destroy($id);
    }
}
