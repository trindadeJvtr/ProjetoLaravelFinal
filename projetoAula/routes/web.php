<?php

use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\VendaController;
Route::get('/vendas', [VendaController::class,'telaCadastro'])->name('venda.cadastro');
Route::post('/vendas/novo', [VendaController::class,'novo'])->name('venda.novo');

Route::get('/vendas/usuario/{id}', [VendaController::class,'vendaPorUsuario'])->name('venda.usuario');

use App\Http\Controllers\UsuarioController;
//Rota para listar todos os usuarios
Route::get('/usuarios', [UsuarioController::class,'index'])->name('usuarios.index');

//rota que direciona para a página que tem o formulario de cadastro
Route::get('/usuarios/cadastro', [UsuarioController::class,'cadastro'])->name('usuarios.cadastro');

//Rota que direciona para o processamento do formulário
Route::post('/usuarios/novo', [UsuarioController::class,'novo'])->name('usuarios.novo');


//Rota para chamar tela de login
Route::get('/telalogin', [AppController::class, 
'telaLogin'])->name('tela.login'); 

//Rota para chamar a função de fazer login
Route::post('/login', [AppController::class, 'login'])->name('login');

//Rota para acessar a tela de alteração de usuario
Route::get('/usuario/alterar/{id}', [UsuarioController::class,'telaAlteracao'])->name('usuario.atualiza'); 

//Rota para alterar o cadastro do usuario
Route::post('/usuario/alterar/{id}', 
[UsuarioController::class,'alterar'])->name('usuario.alterar'); 

//Rota para excluir o usuario
Route::get('/usuario/excluir/{id}', 
[UsuarioController::class,'excluir'])->name('usuario.excluir'); 

