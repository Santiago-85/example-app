<?php
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\PrimerController;
use App\Http\Controllers\VerContactosController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/ver-contactos', [VerContactosController::class, 'index'])->name('mis-views.vercontacto');
Route::get('/mi-primer-controller/{texto}', [PrimerController::class, 'mostrarTexto']);
Route::get('/mi-primer-controller', [PrimerController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});


Route::get('/menu', function () {
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

//

Route::get('/carrito/{id}', function ($id) {
    // Obtener el carrito activo del usuario
    $carrito = DB::table('carrito')
        ->where('id_user', $id)
        ->where('activo', 1)
        ->first();

    if ($carrito) {
        // Obtener los productos del carrito
        $productos = DB::table('detalle_carrito')
            ->join('producto', 'detalle_carrito.id_producto', '=', 'producto.id_producto')
            ->where('detalle_carrito.id_carrito', $carrito->id_carrito)
            ->select('producto.nombre_producto')
            ->get();

        // Obtener el total de productos sumando manualmente
        $totalProductos = $productos->count();

        // Si prefieres calcular el total desde la base de datos, puedes hacerlo así:
        // $totalProductos = DB::table('detalle_carrito')
        //     ->where('id_carrito', $carrito->id_carrito)
        //     ->count();

        return response()->json([
            'carrito' => $carrito,
            'productos' => $productos,
            'total_productos' => $totalProductos
        ]);
    } else {
        return response()->json(['message' => 'Carrito no encontrado para el usuario.']);
    }
});
