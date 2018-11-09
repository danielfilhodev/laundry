@forelse($arrayData as $arr)
	<p>Valor: {{$arr}}</p>
@empty
	{{--<p>Não exite dados</p>--}}
@endforelse