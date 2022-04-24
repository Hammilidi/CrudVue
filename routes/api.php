<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\UserController;









Route::resource('users', UserController::class);


