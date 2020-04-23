<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pessoas/{cpf}', function($cpf) {
    return $cpf;
})->where(['cpf' => '[0-9]{11}']);

Route::post('/pessoas', function() {
    return 'Nova Pessoa';
});

Route::put('/pessoas/{id}/{nome}', function($id, $nome) {
    return sprintf('id:%s e nome é %s', $id, $nome); 
});

Route::get('/produtos/{id?}', function($id = null) {
    if (is_null($id)) {
        return 'Todos os produtos';
    } else {
        return sprintf('id:%s',$id); 
    }
   
});

Route::get('/alunos/{ra}', function ($ra) {
    return $ra;
})->name('alunos');


Route::view('/pagina', 'pagina', ['nome' => 'Romulo']);