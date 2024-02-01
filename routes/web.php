<?php

use App\Http\Controllers\TesteController;
use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.index');
Route::get('/sobre-nos', [\App\Http\Controllers\SobreNosController::class, 'sobreNos'])->name('site.sobrenos');
Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'contato'])->name('site.contato');

Route::get('/login', function() {
    return 'login';
});

Route::prefix('/app')->group(function () {

    Route::get('/clientes', function() {
        return 'clientes';
    })->name('app.clientes');

    Route::get('/fornecedores', function() {
        return 'fornecedores';
    })->name('app.fornecedores');

    Route::get('/produtos', function() {
        return 'produtos';
    })->name('app.produtos');
});

Route::get('/teste/{p1}/{p2}', [TesteController::class, 'teste'])->name('teste');



Route::fallback(function () {
   echo 'A rota acessada não existe. <a href="'.\route('site.index').'" ">Clique aqui<a/> para ir para página inicial';
});




