@extends('layouts.app')

@section('title', $question->body)

@section('content')
  @if (count($question->answers) === 0)
      <p>There are not answers yet, will you be the first?</p>
  @else
  <ol>
    @foreach ($question->answers as $answer)
      <li>{{ $answer->body }}</li>
    @endforeach
  </ol>
  @endif
@endsection