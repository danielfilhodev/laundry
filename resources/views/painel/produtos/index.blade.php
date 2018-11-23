@extends('painel.main')

@section('content')

    <h1 class="title-pg">Listagem de Produtos</h1> 
    
    <a href="{{route('produtos.create')}}" class="btn btn-primary btn-add"><span class="fas fa-folder-plus"></span> Cadastrar</a>
    <br>
    <a href="{{ url('/painel/dashboard') }}">Dashboard</a> 
    <hr>
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

            @foreach($produto as $l)
                @php
                    $l['active'] = ( $l['active'] == 1 ) ? 'Ativo' : 'Inativo';
                @endphp
            <tr>
                <td>{{$l->name}}</td>            
                <td>{{$l->active}}</td>
                <td>{{$l->category}}</td>
                <td>{{$l->description}}</td>
                <td>
                    <a href="{{route('produtos.edit', $l->id)}}" class="edit actions"><i class="material-icons">create</i></span></a>
                    <a href="{{route('produtos.show', $l->id)}}" class="show actions"><i class="material-icons">visibility</i></span></a>
                </td>
            </tr>
            @endforeach
    </table>
</div>
    {!! $produto->links() !!}

@endsection
