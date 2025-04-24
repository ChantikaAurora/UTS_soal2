<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\QuizController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('api/quizzes', [QuizController::class, 'getQuizzes']);