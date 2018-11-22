@extends('painel.main')

@section('content')

    <h1 class="title-pg">Listagem de Produtos</h1> 
    
    <a href="{{route('produtos.create')}}" class="btn btn-primary btn-add"> 
        <span class="fas fa-folder-plus"></span> Cadastrar
    </a>
    <br>

    <a href="{{ url('/painel/dashboard') }}">Dashboard</a> 
    <div class="content">
        <div class="title m-b-md">
        </div>
    </div>
{{--<div class="flex-center position-ref full-height">--}}
<div class="flex-center">
<table class="table table-striped" >
    <tr>
        <th>Produto</th>
        <th>Status</th>
        <th>Seguro</th>
        <th>Descrição</th>
        <th>Ações</th>
    </tr>        

        @foreach($prod as $l)
            @php
                $l['active'] = ( $l['active'] == 1 ) ? 'Ativo' : 'Inativo';
            @endphp
        <tr>
            <td>{{$l->name}}</td>            
            <td>{{$l->active}}</td>
            <td>{{$l->category}}</td>
            <td>{{$l->description}}</td>
            <td>
                <a href="{{route('produtos.edit', $l->id)}}" class="edit actions"><span class="fas fa-pencil-alt"></span></a>
                <a href="" class="delete actions"><span class="fas fa-trash-alt"></span></a>
            </td>
        </tr>
        @endforeach
</table>
    
</div>

@endsection
