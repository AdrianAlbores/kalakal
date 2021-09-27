<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\sampleController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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

Route::get('censilyo' ,function(){
    CryptList::create([
        'fullname'       => 'Censilyo',
        'name'      => 'censilyo',
        'short_key'  => 'CNS',
        'created_at'    => Carbon::now(),
    ]);
    return response()->json(CryptList::all());
});

Auth::routes();

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::group(['middleware' => 'auth', 'prefix' => 'dashboard'],function(){
    Route::get('items', [DashboardController::class, 'DashboardItems']);
});


Route::get('/{any}', [App\Http\Controllers\HomeController::class, 'index'])->where('any', '.*')->name('home');
Route::get('/users','App\Http\Controllers\UserController@index');



// Route::get('/{any}', HomeController::class)->where('any', '^(?!api).*$');
