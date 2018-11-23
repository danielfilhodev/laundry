@extends('painel.main')

@section('content')

    <h1 class="title-pg">{{"Visualizando produto: {$produto->name}"}}</h1> 
    <a href="{{route('produtos.index')}}">Produtos</a> 
    <hr>

    @php
        $produto->active = ( $produto->active == 1 ) ? 'Ativo' : 'Inativo';
    @endphp



    <p><b>Situação: </b>{{$produto->active}}</p>
    <p><b>Número: </b>{{$produto->number}}</p>
    <p><b>Categoria: </b>{{$produto->category}}</p>
    <p><b>Descrição: </b>{{$produto->description}}</p>
   
    <hr>
        @if( $errors->any())
        <div class="alert alert-danger">
            <ul>                
                @foreach( $errors->all() as $error )
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::open(['route' => ['produtos.destroy', $produto->id], 'method' => 'delete']) !!}
        {!! Form::submit("Deletar Produdo: {$produto->name}", ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

@endsection
