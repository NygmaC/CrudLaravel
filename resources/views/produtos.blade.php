@extends('layout.app', ["current" => "produtos"])

@section('body')
<div class="card border">
	<div class="card-body">
		<h5 class="card-title"> Produtos</h5>
		<table class="table table-ordered table-hover">
			<thead >
				<tr>
					<th>Codigo</th>
					<th>Nome Produto</th>
					<th>Quantidade</th>
					<th>Preço</th>
					<th>Categoria</th>
					<th>Ações</th>
				</tr>
			</thead>

			<tbody>
	
			</tbody>

		</table>
	</div>
</div>
<div class="card-footer">
	<button  class="btn btn-sm btn-primary"> Novo Produto </a>
</div>

<div class="model" tabindex="-1" role="dialog" id="FrmProdutos">
	<div class="modal-dialog" role="document">
		<div class="modal-content">

			<form class="form-horizontal" id="formcadastroprodutos">

				<div class="modal-header">
						<div class="modal-title">Novo Produto</div>
				</div>
				
				<div class="modal-body">

					
				</div>

			</form>

		</div>
	</div>
</div>
@endsection