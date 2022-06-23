<?php

use Illuminate\Support\Facades\Route;
use App\Models\Marca;
use App\Models\Categoria;
use App\Http\Controllers\productoController;

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
Route::get("paises", function(){
$paises = [
    "Colombia"=>[
        "cap" => "Bogotá",
        "mon" => "Peso",
        "pob" => 51,
        "ciu" => [
            "Medellin",
            "Cali",
            "Pereira"
        ]
    ],
    "Argentina"=>[
        "cap" => "Buenos Aires",
        "mon" => "Peso",
        "pob" => 45.38,
        "ciu" => [
            "Cordoba",
            "Rosario",
            "Salta"
        ]
        ]
];

return view("paises")
->with("paises", $paises);
});

route::get('prueba', function(){
    //seleccionar todas las marcas
    $Marcas = Marca::all();
    return view('productos.create');
    $Categoria = Categoria::all();
    //ingresar Marcas y Categorias a la vista 
    return view('productos.create')
            ->with('categorias', $Categoria)
            ->with('marcas', $Marcas);


} );

//routes REST
Route::resource('productos', productoController::class);