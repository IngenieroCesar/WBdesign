<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Content;
use Laracasts\Flash\Flash;

class ContentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         $contents = Content::orderBy('id','DESC')->paginate(5);

        return view('admin.myweb.contents.index')->with('contents', $contents);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.myweb.contents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contents = new Content($request->all());
        $contents->user_id =\Auth::user()->id;
        $contents->save();

        flash::success('Se a creado el cONTENIDO ' . $contents->title . 'de manera exitosa.');
        return redirect()->route('admin.myweb.contents.index');
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
        $content = Content::find($id);
                
        return view('admin.myweb.contents.edit')
                    ->with('content', $content);
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
        $content = Content::find($id);
        $content->fill($request->all());
        $content->save();

        Flash::warning('El producto ' .$content->title. ' ha sido actualizada con exito!!');

        return redirect()->route('admin.myweb.contents.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $content = Content::find($id);
        $content->delete();

        Flash::error('El producto '.$content->title. ' a sido borrado de manera éxitosa!');

        return redirect()->route('admin.myweb.contents.index');
    }
}
