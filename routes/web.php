<?php

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/avisos', function () {
    return view('avisos', [
        'nome' => 'Vini',
        'mostrar' => true,
        'avisos' => [
            ['id' => 1, 'aviso' => 'Mussum Ipsum, cacilds vidis litro abertis.'],
            ['id' => 2, 'aviso' => 'Todo mundo vê os porris que eu tomo, mas ninguém vê os tombis que eu levo!.'],
            ['id' => 3, 'aviso' => 'Quem num gosta di mim que vai caçá sua turmis!.']
        ]
    ]);
});

Route::get('/pi', function () {
    return view('index', [
        'nome' => 'Projeto PI 3º Semestre',
        'mostrar' => true,
        'avisos' => [
            ['id' => 1, 'aviso' => 'E-Commerce de roupas e brinquedos de criança usados?'],
            ['id' => 2, 'aviso' => 'E-commerce de tênis/roupas raras?'],
            ['id' => 3, 'aviso' => 'Se vira ai man, penseeee']
        ]
    ]);
});

Route::prefix('clientes')->group(function () {
    Route::get('/lista', [ClientesController::class, 'lista'])->name('clientes.lista')->middleware('auth');
});
