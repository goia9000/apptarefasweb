<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TarefaController;

Route::get('/', [TarefaController::class, 'index'])->name('home.index');
Route::get('/editar/{tarefa}', [TarefaController::class, 'edit'])->name('editar');
Route::post('/adicionar', [TarefaController::class, 'store'])->name('adicionar');
Route::delete('/deletar/{tarefa}', [TarefaController::class, 'destroy'])->name('deletar');

