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
    $questions = Question::withCount('answers')->get();

    return view('question.overview', [
      'questions' => $questions
    ]);
  }
}
