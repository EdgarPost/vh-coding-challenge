@extends('layouts.app')

@section('title', $question->body)

@section('content')
  @if (count($question->answers) === 0)
      <p>There are no answers yet.</p>
  @else
  <x-answer-form :questionId="$question->id" />
  <ol>
    @foreach ($question->answers as $answer)
      <li>{{ $answer->body }}</li>
    @endforeach
  </ol>
  @endif
@endsection