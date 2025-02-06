<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\BoxcardsController;
use App\Http\Controllers\CounterController;
use App\Http\Controllers\mailController;
use App\Http\Controllers\Providersdaat;
use App\Http\Controllers\SliderController;
use App\Http\Middleware\Authgaurd;
use Illuminate\Support\Facades\Route;
                                         // navigation route

// Route::get('/', function () {
//     return view('pages.home');
// })->name('home');

Route::get('/', [Providersdaat::class, 'getbannerdata'])->name('home');

Route::get('/trident_shipping/about-us', function () {
    return view('pages.aboutus');
})->name('aboutus');

Route::get('/trident_shipping/services', function () {
    return view('pages.services');
})->name('services');

Route::get('/trident_shipping/certifications', function () {
    return view('pages.certifications');
})->name('certifications');

Route::get('/trident_shipping/ports', function () {
    return view('pages.ports');
})->name('ports');

Route::get('/trident_shipping/contact_us', function () {
    return view('pages.contact_us');
})->name('contact_us');

Route::get('/trident_shipping/submit_details', function () {
    return view('pages.submit_details');
})->name('submit_details');

// Route::get('/trident_shipping/ports', function () {
//     return view('pages.ports');
// })->name('ports');

                                             //product pages route(innerpages)

Route::get('/trident_shipping/provisions', function(){ return view('innerpages.provision'); })->name('provision');
Route::get('/trident_shipping/bondstores', function(){ return view('innerpages.bondstores'); })->name('bondstores');
Route::get('/trident_shipping/deckstores', function(){ return view('innerpages.deckstores'); })->name('deckstores');
Route::get('/trident_shipping/cabinstores', function(){ return view('innerpages.cabinstores'); })->name('cabinstores');
Route::get('/trident_shipping/enginestore', function(){ return view('innerpages.enginestore'); })->name('enginestore');
Route::get('/trident_shipping/freshwatersupply', function(){ return view('innerpages.freshwatersupply'); })->name('freshwatersupply');
Route::get('/trident_shipping/chemicalsupplies', function(){ return view('innerpages.chemicalsupplies'); })->name('chemicalsupplies');
Route::get('/trident_shipping/lubricatingoilsupplies', function(){ return view('innerpages.lubricatingoilsupplies'); })->name('lubricatingoilsupplies');

Route::get('/trident_shipping/safetyequipments', function(){ return view('innerpages.safetyequipments'); })->name('safetyequipments');
Route::get('/trident_shipping/mooringropes', function(){ return view('innerpages.mooringropes'); })->name('mooringropes');
Route::get('/trident_shipping/secondhandspares', function(){ return view('innerpages.secondhandspares'); })->name('secondhandspares');
Route::get('/trident_shipping/repair-services', function(){ return view('innerpages.repair-services'); })->name('repair-services');

                                                // send mail route

Route::post('/trident_shipping/sendmail',[mailController::class,'sendmail'])->name('sendmail');

//Login

Route::middleware([Authgaurd::class])->group(function(){
    // Route::get('/', function () {
    //     return redirect()->route('login');
    // });
    Route::resource('slider',SliderController::class);
    Route::resource('counter',CounterController::class);
    Route::resource('boxcards', BoxcardsController::class);
    Route::get('/Dashboard', [authController::class,'Dashboard'])->name('Dashboard');
    Route::get('/logout',[authController::class,'logout'])->name('logout');
    Route::get('/register', [authController::class,'registerview'])->name('register');
    Route::post('/registerdata', [authController::class,'registerdata'])->name('registerdata');
    Route::delete('/delete/{id}',[authController::class, 'delete'])->name('delete');
    Route::get('/edit/{id}',[authController::class, 'edit'])->name('edit');
    Route::post('/update/{id}',[authController::class, 'update'])->name('update');
    //readmore button
    Route::get('/readmore/{id}', [BoxcardsController::class, 'show'])->name('readmore.show');
});

Route::get('/login', [authController::class,'loginview'])->name('login');
Route::post('/logindata', [authController::class,'logindata'])->name('logindata');






