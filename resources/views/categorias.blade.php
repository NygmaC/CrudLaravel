@extends('layout.app', ["current" => "categorias"])

@section('body')
	<div class="card border">
		<div class="card-body">
			<h5 class="card-title"> Categorias</h5>
			<table class="table table-ordered table-hover">
				<thead >
					<tr>
						<th>Codigo</th>
						<th>Nome Categoria</th>
						<th>Ações</th>
					</tr>
				</thead>

				<tbody>
			@foreach ($categorias as $cat)
				<tr>
					<td>{{$cat->id}}</td>
					<td>{{$cat->cat_nome}}</td>
					<td>
						<a href="/categorias/update/{{$cat->id}}" class="btn btn-sm btn-primary">Editar</a>
						<a href="/categorias/excluir/{{$cat->id}}" class="btn btn-sm btn-danger">Exluir</a>
					</td>
				</tr>
						
			@endforeach
				</tbody>

			</table>
		</div>
	</div>
	<div class="card-footer">
		<a href="/categorias/setcadastro" class="btn btn-sm btn-primary">Nova Categoria	</a>
	</div>
@endsection