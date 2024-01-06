<?php
use Illuminate\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
    return 'Hello';
});

Route::get('/my-route', function () {
    $data = ['val_a' => 'Hello World!'];
    $data['val_b'] = "Lalaval";
    return view('myfolder.mypage',$data);
});

Route::post('/my-route',function(Request $req){
    $data['myinput'] = $req -> input('myinput');
    return view ('myroute',$data);
});

Route::get('/my-display', function () {
    return view('myfolder.input');
});

Route::post('/my-display',function(Request $req) {
    $data['myinputnumber'] = $req -> input('myinputnumber');
    return view('mydisplay', $data);
});

