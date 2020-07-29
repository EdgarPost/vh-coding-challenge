<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Question;

class QuestionDetailController extends Controller
{
  /**
   * Show the Questions Overview
   *
   * @return View
   */
  public function __invoke($id)
  {
    $question = Question::find($id);

    if (!$question) {
      abort(404);
    }

    return view('question.detail', [
      'question' => $question
    ]);
  }
}
