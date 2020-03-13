@extends('layouts.app')

@section('js')
<script src="{{ mix('js/app.js') }}" defer></script>
@endsection

@section('css')
<link href="{{ mix('css/app.css') }}" rel="stylesheet">
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
 @endsection

@section('content')
<div id="app">
</div>
@endsection
