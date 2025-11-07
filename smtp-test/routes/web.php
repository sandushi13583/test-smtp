<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestSmtpMail;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/send-test-email', function () {
    try {
        Mail::to('thilakaratnesandushi@gmail.com')->send(new TestSmtpMail());
        return '<h1>Email Sent!</h1><p>Check thilakaratnesandushi@gmail.com, inbox.</p>';
    } catch (\Exception $e) {
        return '<h1>Error</h1><pre>' . $e->getMessage() . '</pre>';
    }
})->name('send-test');
