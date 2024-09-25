<?php
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\PrimerController;
use Illuminate\Support\Facades\Route;

Route::get('/mi-primer-controller/{texto}', [PrimerController::class, 'mostrarTexto']);
Route::get('/mi-primer-controller', [PrimerController::class, 'index']);
Route::get('/', function () {
    return view('welcome');
});


Route::get('/index', function () {
    return view('index');
});

Route::get('/Producto1', function () {
    return view('product1');
});

Route::get('/Producto2', function () {
    return view('product2');
});

Route::get('/Contacto', [ContactoController::class, 'index']);
Route::post('/Contacto', [ContactoController::class, 'send']);
Route::get('/Contactado', [ContactoController::class, 'contacted'])->name('contactado');


