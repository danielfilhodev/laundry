@extends('painel.main')

@section('content')

<div class="col-md-6">
	<h1 class="title-pg">Cadastro de Produtos</h1> 
	<a href="{{ url('/painel/produtos') }}">Produtos</a> 
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
		<form class="form" method="post" action="{{route('produtos.update', $produto->id)}}">
			{!! method_field('PUT') !!}
    @else
		<form class="form" method="post" action="{{route('produtos.store')}}">
    @endif
		{{ csrf_field() }}
		<div class="form-group">
			<input type="text" name="name" placeholder="Nome" class="form-control" value="{{$produto->name or old('name')}}">
		</div>
		<div class="form-group">
			<label>
				<input type="checkbox" name="active" value="1" @if( isset($produto) && $produto->active == 1) checked @endif>

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
			<input type="text" name="number" placeholder="Numero" class="form-control" value="{{$produto->number or old('number')}}">
		</div>
		<div class="form-group">
			<select name="category" class="form-control">
				<option value="0">Escolha a catogoria</option>
					@foreach($categorys as $cat)
						<option value="{{$cat}}" 
							@if(old('category') == $cat) selected @endif
							@if(isset($produto) && $produto->category == $cat)
								selected
							@endif
							>{{$cat}}</option>
					@endforeach		
			</select>
		</div>
		<div class="form-group">
			<textarea name="description" placeholder="Descrição" class="form-control">{{$produto->description or old('description')}}</textarea>
		</div>
		@if( isset($produto) )
			<button class="btn btn-primary">Atualizar Produto</button>
		@else
			<button class="btn btn-primary">Cadastrar Produto</button>
		@endif

		
	</form>

</div>
@endsection