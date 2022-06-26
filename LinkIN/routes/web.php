<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyCustomUserAuth;

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
/**login and registration button route from welcome page*/
Route::get(
    '/login', [MyCustomUserAuth::class,'login'
]);
Route::get(
    '/registration', [MyCustomUserAuth::class,'registration'
]);

/**registration and login route */
Route::post(
    '/Register-User', [MyCustomUserAuth::class,'registerUSER'])->name('Register-User'
);
Route::post(
    '/Login', [MyCustomUserAuth::class,'loginUSER'])->name('Login'
);

/**homepage route */
Route::get(
    '/Homepage', [MyCustomUserAuth::class,'dashboard'
]);

/**EDIT & DELETE & ADD RROUTE*/

Route::get(
    '/edit/{id}', [MyCustomUserAuth::class,'postEdit']);
Route::get(
    '/add', [MyCustomUserAuth::class,'tRyadd']);
Route::post(
    '/updatHis', [MyCustomUserAuth::class,'tHISupdate'])->name('tryUpdate'
);
Route::get(
    '/delete/{id}', [MyCustomUserAuth::class,'dataDEL'])->name('Delete');


