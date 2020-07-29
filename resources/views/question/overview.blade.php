@extends('layouts.app')

@section('title', 'Questions')

@section('content')
  <x-question-form />
  <ol>
    @foreach ($questions as $question)
      <li>
        <a href="{{ route('question', ['id' => $question->id, 'slug' => $question->slug], false) }}">
          {{ $question->body }} ({{ $question->answers_count }})
        </a>
      </li>
    @endforeach
  </ol>
@endsection