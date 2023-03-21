<?php

use Illuminate\Support\Facades\Route;
use App\Events\Messaage;
use App\Http\Controllers\TwitterController;
use Illuminate\Http\Request;
use Iluminate\Http\Response;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('chat',function (){
    return view('chat');
})->name('chat');

Route::post('/send-message',function (Request $request){
   event (
       new Messaage(
           $request->input('username'),
           $request->input('message')
       )
   );
   return ["succes"=>true];
});

Route::resource('/Facebook', FacebookController::class);
/** Rutas de @twitter */
Route::resource('twit', 'TwitterController');
//Route::get('index/twitter', 'TwitterController@index')->name('index.twitter');
Route::get('/twitter','TwitterController@login')->name('login.twitter');
Route::get('/twitter/cbk','TwitterController@cbk')->name('cbk');
Route::post('/twitter/post','TwitterController@twitter_post')->name('twitter.post');
//Route::get('/twitter/post','PostController@index')->name('twitter.post');
