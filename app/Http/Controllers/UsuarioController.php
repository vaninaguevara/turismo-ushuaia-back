<?php

namespace App\Http\Controllers;

use App\Models\Entities\Rol;
use App\Models\Entities\Usuario;
use Dotenv\Exception\ValidationException;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('usuario')->get();
        // $users = DB::table('usuario')->all();

        // dd($users);
        // return view('usuarios/usuarios',['usuarios'=> $users]);
        return $users;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        try{
            DB::transaction(function() use ($request){
                // DB::insert('insert into users (id, name) values (?, ?)', [1, 'Dayle']);
                DB::insert('INSERT INTO usuario (Nombre,Apellido,Passwordd, Telefono,Email,RolId) values (?,?,?,?,?,?)',[
                    $request->post(key:'Nombre'),
                    $request->post(key:'Apellido'),
                    $request->post(key:'Passwordd'),
                    $request->post(key:'Telefono'),
                    $request->post(key:'Email'),
                    $request->post(key:'RolId'),
                ]);
            });
        }catch(Exception $ex){
            // echo $ex-> getMessage();
            return $ex;
        }
        // $usuario = new Usuario;
        // $usuario->Nombre = $request->input('nombre');
        // $usuario->Apellido = $request->input('apellido');
        // $usuario->Password = $request->input('password');
        // $usuario->Telefono = $request->input('telefono');
        // $usuario->Email = $request->input('email');
        // $usuario->RolId = $request->input('rolId');
        // $usuario->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($Id)
    {
        $usuario = DB::selectOne("SELECT * FROM usuario WHERE Id = :Id" , ["Id" => $Id]);

        return $usuario;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
