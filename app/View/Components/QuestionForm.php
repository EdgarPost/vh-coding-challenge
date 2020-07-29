<?php

namespace App\View\Components;

use Illuminate\Http\Request;
use Illuminate\View\Component;

class QuestionForm extends Component
{
    public $body;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->body = $request->session()->pull('_old_input.body');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.question-form');
    }
}
