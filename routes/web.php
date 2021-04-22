<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

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

Route::get('/send', function () {
    $data = [
        'title'=>'This is a test',
        'content'=>'This was sent from my Laravel course'
    ];

    Mail::send('emails.test', $data, function ($message) {
        $message->to('******@gmail.com', 'Rose')->subject('Hey, how are you?');
    });
});