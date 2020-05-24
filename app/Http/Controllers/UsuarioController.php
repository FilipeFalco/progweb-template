<?php

namespace App\Http\Controllers;

use App\UsuariosModel;
use CreateUsuariosModelsTable;
use Illuminate\Http\Request;
use Usuario;

class UsuarioController extends Controller
{
    public function index(){
        $usuario = UsuariosModel::orderBy('created_at', 'desc')->paginate(10);
        return view('products.index',['products' => $usuario]);
    }

    public function create()
    {
        return view('usuarios.create');
    }

    public function store(UsuariosModel $request){

        $usuario = new CreateUsuariosModelsTable;
        $usuario->nome = $request->nome;
        $usuario->senha = $request->senha;
        return redirect()->route('usuarios.index')->with('mensage', 'Usuario Criado');
    }

    public function show($id){
        //
    }

    public function edit($id){
        $usuario = UsuariosModel::findOrFail($id);
        return view('usuarios.edit',compact('usuario'));
    }

    public function destroy($id)
    {
        $usuario = UsuariosModel::findOrFail($id);
        $usuario->delete();
        return redirect()->route('usuarios.index')->with('alert-success','Product hasbeen deleted!');
    }

}
