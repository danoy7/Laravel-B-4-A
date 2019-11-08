<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cetak',function(){
    return ('Hello world');
});

Route::get('/nama/{nama}/{age}',function($name,$age){
    return ('Nama Saya Adalah : '.$name.' '.$age);
});

Route::get('/SPRINT-pegadaian-kelas-b',function(){
    return ('Semangat!');
})->name('PegB');

Route::get('/test',function(){
    return redirect()->Route('PegB');
});
Route::get('/create',function(){
    return view('users.create');
});

Route::get('/show','MyuserController@Tampil')->name('show');

Route::post('/adduser','MyuserController@Simpan');

Route::delete('/delete/id/{id}','MyuserController@Delete');
