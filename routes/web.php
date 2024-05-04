<?php

use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\RequestsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\UserRequestsController;
use App\Http\Middleware\is_user;
use App\Http\Middleware\not_admin;
use Illuminate\Support\Facades\Route;


Route::middleware([not_admin::class])->group(function () {
    Route::get("/", function () {
        return view("welcome");
    });

    Route::get("services", [ServicesController::class, 'index']);
});


Route::middleware([is_user::class])->group(function () {
    Route::get("feedbacks", [FeedbackController::class, 'index']);
    Route::post("add_feedback/{user_id}", [FeedbackController::class, 'addfeedback']);


    Route::get("make_request_form/{service_id}", [RequestsController::class, 'index']);
    Route::post("make_request/{service_id}", [RequestsController::class, 'make_request']);

    Route::get("user_requests", [UserRequestsController::class, 'index']);
});

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
