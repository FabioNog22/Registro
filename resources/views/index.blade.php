@extends('pages.app')

@section('body')
    <div class="jumbotron bg-light border border-secondary">
        <div class="row">
            <div class="card-deck">
                <div class="card border border-dark">
                    <div class="card-body">
                        <h5 class="cart-title">Cadastro de Produtos</h5>
                        <p class="cart-text">
                            Aqui você cadastra os seus produtos                            
                        </p>
                        <a href="/produtos" class="btn btn-sm btn-primary">Produtos</a>
                    </div>
                </div>
                <div class="card border border-dark">
                    <div class="card-body">
                        <h5 class="cart-title">Cadastro de Categorias</h5>
                        <p class="cart-text">
                            Aqui você cadastra a suas categorias                          
                        </p>
                        <a href="/categorias" class="btn btn-sm btn-primary">Categorias</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection