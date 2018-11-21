@extends('painel.main')

@section('content')

    <h1 class="title-pg">Listagem de Contratos</h1> 

    <a href="{{ url('/painel/dashboard') }}">Dashboard</a> 
    <div class="content">
        <div class="title m-b-md">
        </div>
    </div>
{{--<div class="flex-center position-ref full-height">--}}
<div class="flex-center">
<table class="table table-striped" >
    <tr>
        <th>Cliente</th>
        <th>Seguro</th>
        <th>Descrição</th>
        <th>Ações</th>
    </tr>
        @foreach($prod as $l)
        <tr>
            <td>{{$l->name}}</td>
            <td>{{$l->category}}</td>
            <td>{{$l->description}}</td>
            <td>
                <a href="" class="edit actions"><span class="fas fa-pencil-alt"></span></a>
                <a href="" class="delete actions"><span class="fas fa-trash-alt"></span></a>
            </td>
        </tr>
        @endforeach
</table>
    
</div>

@endsection
