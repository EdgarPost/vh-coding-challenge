<?php

namespace App\View\Components;

use Illuminate\Http\Request;
use Illuminate\View\Component;
use Illuminate\Support\Collection;

class QuestionForm extends Component
{
    public $body;

    public $placeholder;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->body = $request->session()->pull('_old_input.body');

        $this->placeholder = collect([
            'Where do you get your protein?',
            'What’s wrong with dairy and eggs?',
            'Is vegan food more expensive?',
            'Don’t plants feel pain?',
            'Is “humanely raised” meat better?',
            'Can you be an athlete on a vegan diet?',
            'Don’t cows need to be milked?',
            'What if you were stuck on a deserted island and had nothing else to eat?',
            'Don’t you need meat to be healthy?',
            'If everyone went vegan, what would happen to all the farm animals?',
            'What about human suffering?',
        ])->random();
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
