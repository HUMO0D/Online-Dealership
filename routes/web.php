<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\ContactUsController;

use App\Http\Controllers\AddCarController;

use App\Http\Controllers\LoginController;

use App\Http\Middleware\AdminMiddleware;

use App\Http\Controllers\BuyCarController;



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
    return view('welcome');
});

Route::get('/contact-us', [ContactUsController::class, 'index'])->name('contact_us');
Route::Post('/contact-us', [ContactUsController::class, 'store'])->name('submit_contact');

// Route::get('/contact-us-list', [ContactUsController::class, 'indexlist'])->name('view_contact_us');

Route::get('/home', [ContactUsController::class, 'home'])->name('home');

////////////////////////////111111111111111111111111111
// Route::get('/contact-us-list', [ContactUsController::class, 'indexlist'])->name('contact_us_list');
/////////////////////////////11111111111111111111111111


// Route::get('/add-cars', [ContactUsController::class, 'indexaddcars'])->name('add_cars');



// Route::get('/add-car', [AddCarController::class, 'create'])->name('add_car.create');
// Route::post('/add-car', [AddCarController::class, 'store'])->name('submit_add_car');

//////11111111111111111111111111111111111111111111111111
//  Route::get('/add-cars', [AddCarController::class, 'indexaddcars'])->name('add_cars');
//  Route::post('/add-cars', [AddCarController::class, 'store'])->name('cars_store');
//////////22222222222222222222222222222222222222222222222

  //  Route::resource('cars','AddCarController');


////////////////////////1111111111111111
// Route::get('/list-cars', [AddCarController::class, 'indexlistcars'])->name('view_cars');
///////////////////////11111111111111111111






// Route::get('/signup', [LoginController::class, 'signup'])->name('signup');
// Route::Post('/signup', [LoginController::class, 'store'])->name('submit_user');

// Route::get('/login', [LoginController::class, 'login'])->name('login');
// Route::post('/login', [LoginController::class, 'checklogin'])->name('check_user');


// Route::get('/signout', 'App\Http\Controllers\LoginController@signout');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);


    Route::get('/list-cars', [AddCarController::class, 'indexlistcars'])->name('view_cars');
});


Route::group(['middleware' => ['admin']], function() {
    Route::get('/add-cars', [AddCarController::class, 'indexaddcars'])->name('add_cars');
    Route::post('/add-cars', [AddCarController::class, 'store'])->name('cars_store');
    Route::get('/contact-us-list', [ContactUsController::class, 'indexlist'])->name('contact_us_list');

    Route::get('/Buyers_list', [BuyCarController::class, 'viewcustomers'])->name('Buyers_list');
});






// Route::get('admin/dashboard', function () {

// })->middleware('admin');






Route::get('/911', [BuyCarController::class, 'spec911'])->name('911');
Route::post('/buy911', [BuyCarController::class, 'buy911'])->name('buy911');

Route::get('/718', [BuyCarController::class, 'spec718'])->name('718');
Route::post('/buy718', [BuyCarController::class, 'buy718'])->name('buy718');
