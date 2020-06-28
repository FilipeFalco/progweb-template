<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelUsuario;
use App\User;

class UsuarioController extends Controller
{

    private $objUser;
    private $objUsuario;

    public function __construct()
    {
        $this->objUser=new User();
        $this->objUsuario=new ModelUsuario();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario=$this->objUsuario->all();
        return view('lista', compact('usuario'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=$this->objUser->all();
        return view('create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cad = $this->objUser->create([
            'name'=>$request->name,
            'email'=>$request->email,
            'endereco'=>$request->endereco,
            'cargo'=>$request->cargo,
            'id_user'=>$request->id_user
        ]);

        if($cad){
            return redirect('lista');
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
        $usuario=$this->objUsuario->find($id);
        return view('show', compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario=$this->objUsuario->find($id);
        $users=$this->objUser->all();
        return view('create', compact('usuario', 'users'));
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
