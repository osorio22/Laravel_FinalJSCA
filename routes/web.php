<?php
use App\Http\Controllers\ingredienteController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\NombreModeloController;
use App\Http\Controllers\TabajadorController;
use App\Http\Controllers\UserController;
use App\Models\ingrediente;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return view('home');

});

Route::get('users.index', function () {

    return view('users.index');

});

Route::resource('users', UserController::class);

Route::resource('nombres', NombreModeloController::class );

Route::resource('inventarios', InventarioController::class);

Route::resource('ingredientes', ingredienteController::class);

Route::resource('trabajadores', TabajadorController::class);


Route::get('/ingredientes/{id}/edit', function ($id) {
    return view('ingredientes.edit', );
})->name('ingredientes.edit');

Route::get('/ingredientes/{id}/destroy', function ($id) {
    return view('ingredientes.destroy', ['id' => "$id"]);
})->name('ingredientes.destroy');





// Route::delete('/ingredientes/{id}', [IngredienteController::class, 'destroy'])->name('ingredientes.destroy');



