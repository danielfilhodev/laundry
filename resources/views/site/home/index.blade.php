@extends('site.main')

@section('content')

<div class="flex-center position-ref full-height">

    <div class="content">
        <a href="{{ url('/dashboard') }}">Dashboard</a> | 
        <a href="{{ url('/contato') }}">Contato</a>
        <div class="title m-b-md">
            Home
        </div>
    </div>
    
</div>

@endsection

@push('scripts')

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

@endpush