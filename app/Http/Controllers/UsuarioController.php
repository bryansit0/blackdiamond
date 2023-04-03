<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function check(Request $request)
    {
        if(Auth::attempt($request->only('correoUsuario', 'contrasena')))
        {
            return redirect()->intended('home');
        }else{
            return redirect('login')->with('type', 'danger')
            ->with('message', 'Invalid information. Try again.');
        }
    }
    public function index()
    {
        $datos = Usuario::all();
        return view('usuarios.index', compact('datos'));
    }
    
    public function login()
    {
        return view('login');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuarios.nuevo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = $request->all();
        $datos['contrasena'] = Hash::make($datos['contrasena']);
        Usuario::create($datos);
        return redirect()->route('usuarios.index')
        ->with('type', 'success')
        ->with('message', 'User registered succesfully.');
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
    public function edit(Usuario $usuario)
    {
        return view('usuarios.edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuario $usuario)
    {
        $usuario->update($request->all());
        return redirect('usuarios')->with('type', 'success')
        ->with('message', 'Updated succesfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario $usuario)
    {
        $usuario->delete();
        return redirect('usuarios')->with('type', "success")
        ->with('message', 'User deleted');
    }
}
