@extends('layout.app', ["current" => "home"])

@section('body')
<div class="jumbotron bg-light border border-secondary">
    <div class="row">
        <div class="card-deck">
            <div class="card border border-primary">
                <div class="card-body">
                    <h5 class="card-title">CADASTRO DE PRODUTOS</h5>
                    <P class="card-text">
                        Aqui você cadastra todos os seus produtos.
                        Só não esqueça de cadastrar previamente as Categorias
                    </P>
                    <a href="/produtos" class="btn btn-primary">Cadastre seus Produtos</a>
                </div>
            </div> 
            <div class="card border border-primary">
                <div class="card-body">
                    <h5 class="card-title">CADASTRO DE CATEGORIAS</h5>
                    <P class="card-text">
                        Aqui você cadastra todas as suas Categorias.
                    </P>
                    <a href="/categorias" class="btn btn-primary">Cadastre suas Categorias</a>
                </div>
            </div>       
        </div>
    </div>
</div>
            
@endsection
