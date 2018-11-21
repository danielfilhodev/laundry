@extends('painel.main')

@section('content')

    <h1>Listagem de Produtos</h1> 
    <a href="{{ url('/painel/dashboard') }}">Dashboard</a> 
    <div class="content">
        <div class="title m-b-md">
        </div>
    </div>
{{--<div class="flex-center position-ref full-height">--}}
<div class="flex-center">
<table>
    <tr>
        <th>Nome</th>
        <th>Categoria</th>
        <th>Descrição</th>
    </tr>
        @foreach($prod as $l)
        <tr>
            <td>{{$l->name}}</td>
            <td>{{$l->category}}</td>
            <td>{{$l->description}}</td>
        </tr>
        @endforeach
</table>
    
</div>

@endsection
