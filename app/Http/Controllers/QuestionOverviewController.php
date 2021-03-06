<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Question;

class QuestionOverviewController extends Controller
{
  /**
   * Show the Questions Overview
   *
   * @return View
   */
  public function __invoke()
  {
    $questions = Question::withCount('answers')
      ->orderBy('created_at', 'desc')
      ->get();

    return view('question.overview', [
      'questions' => $questions
    ]);
  }
}
