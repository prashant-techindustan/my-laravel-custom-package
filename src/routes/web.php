<?php

use Prashant\Inspire\Controllers\InspirationController;
use Illuminate\Support\Facades\Route;

Route::get('inspire', [InspirationController::class, '__invoke']);