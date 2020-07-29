<?php

namespace App\View\Components;

use App\Question;
use Illuminate\Http\Request;
use Illuminate\View\Component;

class AnswerForm extends Component
{
    public $questionId;
    
    public $body;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Request $request, $questionId)
    {
        $this->questionId = $questionId;
        
        $this->body = $request->session()->pull('_old_input.body');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.answer-form');
    }
}
