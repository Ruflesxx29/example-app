<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BikeController;
use App\Http\Controllers\DummyController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\CancionController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

//mvc

//ruta a la que se llega con el metodo GET y la ruta es /ruta1 y devuleve el texto ...
Route::get('ruta1', function () {
    return 'Hello World';
})->name('ruta1');

Route::get('ruta2', function () {
    return view('default.welcome');
})->name('ruta2');

Route::get('/', [DummyController::class, 'main'])->name('main');

Route::delete('dummy/delete', [DummyController::class, 'delete'])->name('dummy.delete');
Route::get   ('dummy/get',    [DummyController::class, 'get'   ])->name('dummy.get'   );
Route::post  ('dummy/post',   [DummyController::class, 'post'  ])->name('dummy.post'  );
Route::put   ('dummy/put',    [DummyController::class, 'put'   ])->name('dummy.put'   );
Route::any   ('dummy/any',    [DummyController::class, 'any'   ])->name('dummy.any'   );

Route::resource('bike', BikeController::class); //las rutas de recursos tienen ya un nombre de forma predeterminada
Route::resource('persona', PersonaController::class); 
Route::resource('cancion', CancionController::class);