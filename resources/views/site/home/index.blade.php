@extends('main')

@section('content')

<div class="flex-center position-ref full-height">

    <div class="content">
        <a href="{{ url('/') }}">Site</a> | 
        <a href="{{ url('/contato') }}">Contato</a>
        <div class="title m-b-md">
            Home
        </div>
    </div>
    
</div>

@endsection