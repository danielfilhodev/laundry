@extends('painel.main')

@section('content')

<div class="flex-center position-ref full-height">

<div class="top-right links">
	<!--usar este modelo para entradas de usuarios-->
	{{$nome or 'Visitante'}} - 
	<!--usar este quando for preciso passar algum script-->
	{!! $msg !!}
</div>

    <div class="content">
        <a href="{{ url('/') }}">Site</a> | 
        <a href="{{ url('/setup') }}">Setup</a>
        <div class="title m-b-md">
            Dashboard
        </div>
    </div>
    
</div>

@endsection