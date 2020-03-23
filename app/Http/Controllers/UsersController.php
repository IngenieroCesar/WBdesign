<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\User_img;
use Laracasts\Flash\Flash;
use App\Http\Requests\UserRequest;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = User::buscar_usuario($request->name)->orderBy('id','ASC')->paginate(10);
        return view('admin.users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {

         /*  Manipulaciòn de archivos  */
        if ($request->file('imagen'))
        {
            $file = $request->file('imagen');
            $name = 'User_' . time() . '.' . $file->getClientOriginalExtension();
            $path = public_path() . '/Imagenes/Users/';
            $file->move($path, $name);
        }

        /*------*/

        $user = new User($request->all());
        $user->password = bcrypt($request->password);
        $user->imagen = $name;
        $user->ruta =  $path . $name;
        $user->save();



        Flash::success('Se ha registrado a ' .$user->name. " de manera exitosa!");
        return redirect()->route('admin.users.index');
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
        $user = User::find($id);
        return view('admin.users.edit')->with('user',$user);
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

        $user = User::find($id);


        if ($request->file('imagen'))
        {
            if (unlink($user->ruta)) {
                $file = $request->file('imagen');
                $name = 'User_' . time() . '.' . $file->getClientOriginalExtension();
                $path = public_path() . '/Imagenes/Users/';
                $file->move($path, $name);
                $user->ruta = $path . $name;

            }

        }
        else{
            $name = $user->imagen;
        }

        $user->fill($request->all());
        $user->imagen = $name;
        $user->save();

        Flash::warning('El usuario ' .$user->name. ' ha sido editado con exito!!');

        return redirect()->route('admin.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $img = User_img::find($id);

        if (unlink($img->ruta)) {

        $user->delete();

        Flash::error('El usuario '.$user->name. ' a sido borrado de manera éxitosa!');

        return redirect()->route('admin.users.index');

        }
    }
}
