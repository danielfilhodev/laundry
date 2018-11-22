@extends('painel.main')

@section('content')

<div class="col-md-5">
	<h1 class="title-pg">Cadastro de Produtos</h1> 

	<form class="form" method="post" action="{{route('produtos.store')}}">
		{{ csrf_field() }}
		<div class="form-group">
			<input type="text" name="name" placeholder="Nome" class="form-control">
		</div>
		<div class="form-group">
			<label>
				<input type="checkbox" name="active" value="1">
				Ativo?
			</label>
		</div>
		<div class="form-group">
			<input type="text" name="number" placeholder="Numero" class="form-control">
		</div>
		<div class="form-group">
			<select name="category" class="form-control">
				<option >Escolha a catogoria</option>
				@foreach($categorys as $cat)
					<option value="{{$cat}}">{{$cat}}</option>
				@endforeach		
			</select>
		</div>
		<div class="form-group">
			<textarea name="description" placeholder="Descrição" class="form-control"></textarea>
		</div>
		<button class="btn btn-primary">Cadastrar Produto</button>
		
	</form>

</div>
@endsection