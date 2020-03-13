@extends('layouts.app')

@section('css')
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
@endsection

@section('content')
<div class="">

  <div class="flex justify-center">
    <p class="text-4xl text-gray-700 my-3">Crea un Nuevo Usuario</p>
  </div>

  <div class="flex justify-center">

    <div class="text-gray-700 text-center bg-gray-100 px-4 py-2 m-2 ">

      <form class="w-full max-w-lg" method="POST" action="{{ url('users') }}" enctype="multipart/form-data" >
        {{ csrf_field() }}

        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-email">
              Email
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="email" type="text" placeholder="">
            @if ($errors->has('email'))
              <p class="text-red-500 text-xs italic">{{ $errors->first('email') }}</p>
            @endif
          </div>
          <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              Password
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="password" type="password" placeholder="">
            @if ($errors->has('password'))
              <p class="text-red-500 text-xs italic">{{ $errors->first('password') }}</p>
            @endif
          </div>
        </div>

        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full md:w-2/3 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
              Nombre
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="nombre" type="text" placeholder="">
            @if ($errors->has('nombre'))
              <p class="text-red-500 text-xs italic">{{ $errors->first('nombre') }}</p>
            @endif
          </div>

          <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
              Rol
            </label>
            <div class="relative">
              <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="rol">
                <option>admin</option>
                <option>operador</option>
                <option>administrativo</option>
              </select>
              <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
              </div>
            </div>
            @if ($errors->has('rol'))
              <p class="text-red-500 text-xs italic">{{ $errors->first('rol') }}</p>
            @endif
          </div>
        </div>

        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              Apellidos
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="apellidos" type="text" placeholder="">
          </div>
          @if ($errors->has('apellidos'))
            <div class="w-full px-3">
              <p class="text-red-500 text-xs text-center italic">{{ $errors->first('apellidos') }}</p>
            </div>
            @endif
        </div>


        <div class="flex flex-wrap mb-2 float-right ">
          <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type='submit'>
            Crear
          </button>
        </div>
      </form>

    </div>
  </div>

  </div>

</div>
@endsection
