<?php

namespace App\Http\Controllers;

use App\Models\curso;
use Illuminate\Http\Request;

class cursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //creamos un array para poder manipular la informaicon de la tabla cursos
        // A su vez el array actuara como un objeto
        $cursito = curso::all();
        /* El metodo compact pide un parametro el cual sera nuestro array llamado cursito y va acompañando la vista que estamos llamando */
        return view('cursos.index' , compact('cursito'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cursos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)//Almacena el reigstro pidiendo una solicitud
    {
        //con el metodo all() veo toda la informaicon
        //return $request->all();
        /* Obtuvimos el datos de lo que el usuario envia por el input
            cuyo name es 'nombre'*/
        //return $request->input('nombre');
        //creamos una nueva instancia del modelo
        $cursito = new curso();
        //esto me permitira manipular la tabla crusos
        $cursito->nombre=$request->input('nombre');
        $cursito->descripcion = $request->input('descripcion');

        if ($request->hasFile('imagen')){ //si desde ese campo viene un archivo
            $cursito->imagen = $request->file('imagen')->store('public');
        }
        //con esto ejecutamos el comando para guardar
        $cursito->save();
        return 'waw lo lograste guardar';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) //Muestra la informaicon del registro segun el parametro del ID
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)//Puede editar el registro segun el parametro del ID
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)//Actualiza el registro pidiendo una solicitud al sistema
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)//Elimina el registro segun el parametro
    {
        //
    }
}
