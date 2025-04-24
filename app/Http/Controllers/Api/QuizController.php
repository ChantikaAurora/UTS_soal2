<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
use App\Services\QuizApiService;

class QuizController extends Controller
{
    protected $apiService;

    public function __construct(QuizApiService $apiService)
    {
        $this->apiService = $apiService;
    }

    public function getQuizzes()
    {
        $quizzes = $this->apiService->getQuizzes();
        return view('quizzes', ['data' => $quizzes]);
    }
}
