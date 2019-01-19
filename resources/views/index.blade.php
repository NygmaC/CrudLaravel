@extends('layout.app', ["current" => "home"])

@section('body')
	<div class="jumbotron bg-light border border-secondary">
		<div class="row">
			<div class="card-deck">
				<div class="card border border-primary">
					<div class="card-body">
						<h5 class="card-title">
							Cadastro de Produtos
						</h5>
						<p class="car=text">
							Cadastrar Produtos
						</p>
						<a href="/produtos" class="btn btn-primary">Cadastrar</a>
					</div>
				</div>

				<div class="card border border-primary">
					<div class="card-body">
						<h5 class="card-title">
							Cadastro de Categorias
						</h5>
						<p class="car=text">
							Cadastrar de Departamentos
							Cadastro referente aos departamentos do sistema.
						</p>
						<a href="/categorias" class="btn btn-primary">Cadastrar</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection