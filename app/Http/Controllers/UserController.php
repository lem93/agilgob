<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('table');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $message = "Error al crear el usuario";
        $error = true;
        if (User::create($request->validated())) {
          $message = "Usuario Creado Exitosamente";
          $error = false;
        }

        return view('table', compact('message', 'error'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
      return view('edit', compact($user));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, User $user)
    {
        $message = "Error al actualizar el usuario";
        $error = true;
        if ($user->update($request->validated())) {
          $message = "Usuario Actualizado Exitosamente";
          $error = false;
        }

        return view('table', compact('message', 'error'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
      $message = "Error al eliminar el usuario";
        $error = true;
        if ($user->delete()) {
          $message = "Usuario Eliminado Exitosamente";
          $error = false;
        }

        return view('table', compact('message', 'error'));
    }
}
