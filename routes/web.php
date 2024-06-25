<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\VenueController;
use App\Models\Venue;
use App\Http\Controllers\TicketController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('users.login');
});

//all listings
Route::get('/index', [ListingController::class, 'index']);

//show create
Route::get('/listings/create', [ListingController::class, 'create']);

//store listing
Route::post('/listings', [ListingController::class, 'store']);

//edit listing
Route::get('/listings/{id}/edit',[ListingController::class, 'edit']);
Route::put('/listings/{id}',[ListingController::class, 'update']);

//delete listing
Route::delete('/listings/{id}',[ListingController::class, 'destroy']);

//show single listing 
Route::get('/listings/{id}', [ListingController::class, 'show']);

//show signup
Route::get('/signup', [UserController::class, 'create']);

//create users
Route::post('/users', [UserController::class, 'store']);

//log out
Route::post('/logout', [UserController::class, 'logout']);

//show login
Route::get('/login', [UserController::class, 'login']);

//login user
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

 //venue
Route::resource('/venues', VenueController::class);

//beli tiket
Route::get('/buy-ticket', [TicketController::class, 'showPurchaseForm'])->name('buy-ticket');
Route::post('/purchase-ticket', [TicketController::class, 'processPurchase'])->name('purchase-ticket');
Route::get('/payment', [TicketController::class, 'showPaymentForm'])->name('payment');
Route::post('/verify-payment', [TicketController::class, 'verifyPayment'])->name('verify-payment');
Route::get('/print-ticket', [TicketController::class, 'showPrintTicketForm'])->name('print-ticket');
