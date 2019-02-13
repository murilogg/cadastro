@extends('layout.app', ["current" => "produtos"])

@section('body')

<div class="card border">
	<div class="card-body">
		<form action="/produtos" method="POST">
			@csrf
			<div class="form-group">
				<label for="nomeProduto">Nome do Produto</label>
				<input type="text" class="form-control" name="nomeProduto" placeholder="Produto">
				<label for="nomeProduto">Quantidade do Produto no Estoque</label>
				<input type="text" class="form-control" name="quantidadeProduto" placeholder="20">
				<label for="nomeProduto">Preço do Produto</label>
				<input type="text" class="form-control" name="precoProduto" placeholder="12,50">
                <label for="nomeProduto">Selecione a Categoria do Produto</label>
                <select class="form-control" id="cat" name="categoriaProduto">
                    <option selected>Selecione...</option>
                    <option value="1">{{ $cat }}</option>
                </select>
			</div>
			<button type="submit" class="btn btn-primary btn-sm">Salvar</button>
			<button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
		</form>
	</div>
</div>
 
@endsection