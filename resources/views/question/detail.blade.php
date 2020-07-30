@extends('layouts.app')

@section('title', $question->body)

@section('content')

  <a href="{{ route('questions', [], false) }}">
    Back to the list
  </a>

  <x-answer-form :questionId="$question->id" />

  @if (count($question->answers) === 0)
    <p>There are no answers yet.</p>
  @else
  <ol>
    @foreach ($question->answers as $answer)
      <li>{{ $answer->body }}</li>
    @endforeach
  </ol>
  @endif
@endsection