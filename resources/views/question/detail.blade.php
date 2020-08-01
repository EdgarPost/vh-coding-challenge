@extends('layouts.app')

@section('title', $question->body)
@section('breadcrumb', $question->body)

@section('content')

<x-answer-form :questionId="$question->id" />

<div class="mt-5">
  <h2 class="text-center">Answers</h2>
  @if (count($question->answers) === 0)
  <p>There are no answers yet.</p>
  @else
  <ol class="list-group">
    @foreach ($question->answers as $answer)
    <li class="list-group-item">
      {{ $answer->body }}
    </li>
    @endforeach
  </ol>
  @endif
</div>

@endsection