@extends('painel.main')

@section('content')

<div class="flex-center position-ref full-height">

    <div class="content">
        <a href="{{ url('/dashboard') }}">Dashboard</a> | 
        <a href="{{ url('/setup') }}">Setup</a>
        <div class="title m-b-md">
            Dashboard
        </div>
    </div>
    
</div>

@endsection