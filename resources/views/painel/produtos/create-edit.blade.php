@extends('painel.main')

@section('content')

<div class="col-md-6">
	<h1 class="title-pg">
		@if( isset($produto) )
			Atualização de Produtos
		@else
			Cadastro de Produtos
		@endif
	</h1> 
	<a href="{{route('produtos.index')}}">Produtos</a> 
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

    @if( isset($produto) )
		{!! Form::model($produto, ['route' => ['produtos.update', $produto->id],'class' => 'form', 'method' => 'put']) !!}	
    @else
		{!! Form::open(['route' => 'produtos.store', 'class' => 'form']) !!}	
    @endif
		<div class="form-group">			
			{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nome:']) !!}
		</div>
		<div class="form-group">
			<label>
				{!! Form::checkbox('active') !!}
					@if( isset($produto) )
			            @php
			              	$produto->active = ( $produto->active == 1 ) ? 'Ativo' : 'Inativo';
			            @endphp
					{{$produto->active}}
					@else
						Marque para ativar!
					@endif
			</label>
		</div>
		<div class="form-group">
			{!! Form::text('number', null, ['class' => 'form-control', 'placeholder' => 'Número:']) !!}
		</div>
		<div class="form-group">
			{!! Form::select('category', array_merge(['0' => 'Selecione um valor'],$categorys), null, ['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Descrição:']) !!}
		</div>
		@if( isset($produto) )
			{!! Form::submit('Atualizar Produto', ['class' => 'btn btn-primary']) !!}
		@else
			{!! Form::submit('Cadastrar Produto', ['class' => 'btn btn-primary']) !!}			
		@endif
		{!! Form::close() !!}
		
	</form>

</div>
@endsection