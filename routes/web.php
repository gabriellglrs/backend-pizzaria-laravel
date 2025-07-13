<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\ItemPedidoController;
use App\Http\Controllers\PagamentoController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

// Rotas da aplicação testando o Laravel
Route::get('/', function () {
    return view('welcome');
});

// Rotas para Clientes
Route::apiResource('clientes', ClienteController::class);

// Rotas para Funcionários
Route::apiResource('funcionarios', FuncionarioController::class);

// Rotas para Categorias
Route::apiResource('categorias', CategoriaController::class);

// Rotas para Produtos
Route::apiResource('produtos', ProdutoController::class);

// Rotas para Pedidos
Route::apiResource('pedidos', PedidoController::class);

// Rotas para ItensPedido
Route::apiResource('itens-pedido', ItemPedidoController::class);

// Rotas para Pagamentos
Route::apiResource('pagamentos', PagamentoController::class);
