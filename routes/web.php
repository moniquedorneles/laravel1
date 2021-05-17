<?php

use App\Http\Controllers\Admin\ConfigController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TarefaController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::view('/', 'site.admin');
Route::view('/teste', 'teste');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('contact', [ContactController::class, 'contact'])->name('contact');

Route::resource('todo', TodoController::class);

Route::prefix('/tarefas')->group(function() {
    Route::get('/', [TarefaController::class,'list'])->name('tarefas.list'); // listagem de tarefas

    Route::get('add', [TarefaController::class,'add'])->name('tarefas.add');
    Route::post('add', [TarefaController::class,'addAction']); //ação de adição

    Route::get('edit/{id}', [TarefaController::class,'edit'])->name('tarefas.edit');  //tela de edição
    Route::post('edit/{id}', [TarefaController::class,'editAction']);  //ação de edição

    Route::get('delete/{id}', [TarefaController::class,'delete'])->name('tarefas.del');  //ação de deletar

    Route::get('marcar/{id}', [TarefaController::class,'done'])->name('tarefas.done');   //marcar resolvido/não
});

Route::prefix('/config')->group(function(){
    
    Route::get('/', [ConfigController::class,'index'])->name('config.index');
    Route::get('/info', [ConfigController::class,'info']);
    Route::get('/permissoes', [ConfigController::class,'permissoes']);

});