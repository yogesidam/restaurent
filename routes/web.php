<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/temp',[HomeController::class,'temp']);
// Route::post('/tempo',[HomeController::class,'tempo']);


Route::get('/',[HomeController::class,'index']);

// Route help to get to admin or user page.----------
Route::get('/redirects',[HomeController::class,'redirects']);


Route::post('/addcart/{id}',[HomeController::class,'addcart']);


Route::get('/showcart/{id}',[HomeController::class,'showcart']);


Route::get('/remove/{id}',[HomeController::class,'remove']);


Route::get('/order/{id}',[HomeController::class,'order']);


Route::post('/order/store',[HomeController::class,'orderstore']);

// Route for user page.----------
Route::get('/user',[AdminController::class,'user']);
Route::post('/tempo',[AdminController::class,'tempo']);

// Route for delete user.---------
Route::get('/delete/user/{id}',[AdminController::class,'deleteuser']);

// Route for food page---------
Route::get('/food',[AdminController::class,'foodmenu']);

// Route for uplodes food.--------
Route::post('/upload/food',[AdminController::class,'upload']);

// Route for deletenmenu form food.-------
Route::get('/deletemenu/{id}',[AdminController::class,'deletemenu']);

// Route for update menu for food.-------
Route::get('/updatemenu/{id}',[AdminController::class,'updatemenu']);

// Route to store food data from table.-------
Route::post('/upload/{id}',[AdminController::class,'update']);

// Route for creating reservation of guest.--------
Route::post('/reservation',[AdminController::class,'reservation']);

// Route for viw the reservation in admin page.--------
Route::get('/viewreservation',[AdminController::class,'viewreservation']);


Route::get('/viewchef',[AdminController::class,'viewchef']);


Route::post('/uploadchef',[AdminController::class,'uploadchef']);


Route::get('/updatechef/{id}',[AdminController::class,'updatechef']);


Route::post('/updatefoodchef/{id}',[AdminController::class,'updatefoodchef']);


Route::get('/deletechef/{id}',[AdminController::class,'deletechef']);


Route::get('/orders',[AdminController::class,'orders']);


Route::post('/search',[AdminController::class,'search']);


Route::get('/breakfast',[AdminController::class,'breakfast']);


Route::post('/breakfast/store',[AdminController::class,'breakfaststore']);


Route::get('/lunch',[AdminController::class,'lunch']);


Route::post('/lunch/store',[AdminController::class,'lunchstore']);


Route::get('/dinner',[AdminController::class,'dinner']);


Route::post('/dinner/store',[AdminController::class,'dinnerstore']);









