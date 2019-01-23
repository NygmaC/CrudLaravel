@extends('layout.app', ["current" => "produtos"])

@section('body')
<div class="card border">
	<div class="card-body">
		<h5 class="card-title"> Produtos</h5>
		<table class="table table-ordered table-hover" id="tabelaProdutos">
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
	<button  class="btn btn-sm btn-primary" onclick="novoProduto()"> Novo Produto </a>
</div>

<div class="modal" tabindex="-1" role="dialog" id="FrmProdutos">
	<div class="modal-dialog" role="document">
		<div class="modal-content">

			<form class="form-horizontal" id="formcadastroprodutos" >

				<div class="modal-header">
						<div class="modal-title">Novo Produto</div>
				</div>
				
				<div class="modal-body">

					<input type="hidden" id="id" class="form-control">

					<div class="form=group">
						<label for="nomeProduto" class="control-label">Nome do Produto</label>
						<div class="input-group">
							<input type="text" name="" id="nomeProduto" class="form-control">
						</div>
					</div>

					<div class="form=group">
						<label for="precoProduto" class="control-label">Preço do Produto</label>
						<div class="input-group">
							<input type="number" name="" id="precoProduto" class="form-control">
						</div>
					</div>

					<div class="form=group">
						<label for="quantidadeProduto" class="control-label">Quantidade do Produto</label>
						<div class="input-group">
							<input type="number" name="" id="quantidadeProduto" class="form-control">
						</div>
					</div>

					<div class="form=group">
						<label for="departamentoProduto" class="control-label">Categoria do Produto</label>
						<div class="input-group">
							<select class="form-control" name="" id="departamentoProduto"></select>
						</div>
					</div>

				</div>

				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Salvar</button>
					<button type="submit" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
				</div>

			</form>

		</div>
	</div>
</div>
@endsection

@section('javascript')
	<script type="text/javascript" src="{{ asset('js/produtos/jsproduto.js') }}"></script>
@endsection