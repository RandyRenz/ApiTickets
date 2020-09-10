<?php
use App\Ticket;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/tickets', function () {

    $tickets= Ticket::all();
     

    return view('tickets.index', [
     'tickets' =>$tickets
     ]);
});
Route::post('tickets', 'TicketController@store'); 
Route::get('tickets/create', 'TicketController@create');
