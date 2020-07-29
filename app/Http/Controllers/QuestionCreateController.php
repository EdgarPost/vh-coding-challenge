<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreQuestion;
use App\Question;

class QuestionCreateController extends Controller
{
  /**
   * Store a new Question.
   *
   * @return View
   */
  public function __invoke(StoreQuestion $request)
  { 
    $validated = $request->validated();
    $question = Question::create($validated);

    return redirect()->route('question', ['id' => $question->id, 'slug' => $question->slug]);
    
  }
}
