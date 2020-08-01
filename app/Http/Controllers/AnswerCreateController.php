<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Answer;
use App\Http\Requests\StoreAnswer;
use App\Question;

class AnswerCreateController extends Controller
{
  /**
   * Store a new Answer.
   *
   * @return View
   */
  public function __invoke(StoreAnswer $request)
  {
    $validated = $request->validated();

    $question = Question::find($request->id);

    if (!$question) {
      abort(404);
    }

    $question->answers()->create($validated);

    $request->session()->flash('status', 'Your answer was posted!');

    return redirect()->route('question', ['id' => $question->id, 'slug' => $question->slug]);
  }
}
