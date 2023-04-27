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
    return view('home');
});


Route::get('/contacto', TicketsController::class.'@'.'contact'); 
Route::post('/contacto', TicketsController::class.'@'.'store'); 

Route::get('/tickets', TicketsController::class.'@'.'index'); 
Route::get('/ticket/{slug}', TicketsController::class.'@'.'show'); 
Route::get('/ticket/{slug}/editar', TicketsController::class.'@'.'edit'); 

Route::post('/ticket/{slug}/editar', TicketsController::class.'@'.'update'); 
Route::post('/ticket/{slug}/eliminar', TicketsController::class.'@'.'destroy'); 

Route::post('/comentario', ComentariosController::class.'@'.'nuevoComentario'); 


//php artisan serve
// php artisan make:controller TicketsController --resource
//php artisan make:request TicketFormRequest

// Consolidar cuentas
// Tesorería realizada la transfe
// Control interno, Tesorería, los prestamos se despositaron a los supervisores.
// Jefe Comecial: 
// Supervisor -> su numero d cuenta
// Omar Marin->Lider Proyecto Todo debe estar incluido
// Definir pruebas de aceptacion  ¿Incluir las pruebas en el ciclo dl desarrollo. 
// Developer, PO, QA