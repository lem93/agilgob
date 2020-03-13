@extends('layouts.app')

@section('js')
<script src="{{ mix('js/app.js') }}" defer></script>
@endsection

@section('css')
<link href="{{ mix('css/app.css') }}" rel="stylesheet">
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
 @endsection

@section('content')
@if (\Session::has('success'))
<div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
  <div class="flex">
    <div>
      <p class="font-bold">{!! \Session::get('success') !!}</p>
    </div>
  </div>
@endif
</div><div id="app">
</div>
@endsection
