@extends('painel.main')

@section('content')

<div class="flex-center position-ref full-height">

@if (Auth::check())

	<div class="top-right links">
	    <a href="{{ url('/home') }}">Home</a>
		<!--usar este modelo para entradas de usuarios-->
		{{$nome or 'Visitante'}} - 
		<!--usar este quando for preciso passar algum script-->
		{!! $msg !!}
	</div>

@endif


    <div class="content">
        <a href="{{ url('/') }}">Site</a> | 
        <a href="{{ url('/setup') }}">Setup</a>
        <div class="title m-b-md">
            Dashboard
        </div>
    </div>
    
</div>

@include('site.includes.siderbar')

@endsection