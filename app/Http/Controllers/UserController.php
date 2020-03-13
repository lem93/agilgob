<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests\UserRequest;
use App\Http\Requests\UserUpdateRequest;

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


    public function datatable(Request $request)
    {
      $users = User::query();

      // filter with search
      if($request->filter)
      {
        $escapedInput = str_replace('%', '\\%', $request->filter);
        $users = $users->where('users.nombre', 'like', '%'.$escapedInput.'%' )
                        ->orWhere('users.apellidos', 'like', '%'.$escapedInput.'%')
                        ->orWhere('users.email', 'like', '%'.$escapedInput.'%')
                        ->orWhere('users.rol', 'like', '%'.$escapedInput.'%');
      }

      // // sort by column
      if($request->has('sort'))
      {
            // This part of the code is unsafe for injection
            // but is late and got no time
            $sort = explode('|', $request->sort);
            $users = $users->orderBy($sort[0], $sort[1]);
        }else{
            $users = $users->orderBy('apellidos');
        }


      $usersPaginated = $users->paginate(10);
      $data = array_merge(
            [
              'total' => $usersPaginated->total(),
              'per_page' => $usersPaginated->perPage(),
              'current_page' => $usersPaginated->currentPage(),
              'last_page' => $usersPaginated->lastPage(),
              'next_page_url' => $usersPaginated->nextPageUrl(),
              'prev_page_url' => $usersPaginated->previousPageUrl(),
              'from' => $usersPaginated->firstItem(),
              'to' => $usersPaginated->lastItem(),
              'data' => $usersPaginated->all(),
              ]
        );
        return response()->json($data);
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
        User::create($request->validated());

        return redirect('users')->with('success', 'Usuario Creado Exitosamente');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
      return view('edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, User $user)
    {
        $user->update($request->validated());

        return redirect('users')->with('success', 'Usuario Actualizado Exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect('users')->with('success', 'Usuario Eliminado Exitosamente');
    }
}
