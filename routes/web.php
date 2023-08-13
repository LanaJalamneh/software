<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\HomeController;




Route::controller('App\Http\Controllers\HomeController')->group(function (){
    Route::get('/','index');
    Route::get('/about','about');
    Route::get('/contact','contact');
    

    Route::get('/single','single');
    Route::get('/double','double');
    Route::get('/triple','triple');
    Route::get('/twin','twin');
    Route::get('/family','family');
    Route::get('/suite','suite');


    Route::get('/type','type');
    Route::get('/signup','signup');
    Route::get('/login','login');


});


Route::post('contact/submit',[\App\Http\Controllers\ContactController::class,'insert'])->name('contact.submit');
Route::get('data',[\App\Http\Controllers\ContactController::class,'index']);
Route::get('edit/{id}',[\App\Http\Controllers\ContactController::class,'edit'])->name('contact.edit');
Route::get('delete/{id}',[\App\Http\Controllers\ContactController::class,'delete'])->name('contact.delete');
//Route::get('deleteAll',[\App\Http\Controllers\ContactController::class,'deleteAll'])->name('contact.delete.all');
Route::get('deleteAllTruncate',[\App\Http\Controllers\ContactController::class,'deleteAllTruncate'])->name('contact.delete.all.truncate');





