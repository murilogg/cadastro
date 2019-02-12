@extends('layout.app', ["current" => "produtos"])

@section('body')

<div class="card border">
	<div class="card-body">
		<form action="/produtos" method="POST">
			@csrf
			<div class="form-group">
				<label for="nomeProduto">Nome do Produto</label>
				<input type="text" class="form-control" name="nomeProduto" id="nomeProduto" placeholder="Produto">
				<label for="nomeProduto">Quantidade do Produto no Estoque</label>
				<input type="text" class="form-control" name="nomeProduto" id="nomeProduto" placeholder="20">
				<label for="nomeProduto">Preço do Produto</label>
				<input type="text" class="form-control" name="nomeProduto" id="nomeProduto" placeholder="12,50">
                <label for="nomeProduto">Selecione a Categoria do Produto</label>
                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                    <option selected>Choose...</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
			</div>
			<button type="submit" class="btn btn-primary btn-sm">Salvar</button>
			<button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
		</form>
	</div>
</div>
 
@endsection