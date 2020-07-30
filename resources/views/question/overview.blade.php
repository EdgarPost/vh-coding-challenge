@extends('layouts.app')

@section('title', 'Questions')

@section('content')
  <x-question-form />
  <ol class="list-group py-5">
    @foreach ($questions as $question)
      <li class="list-group-item">
        <a href="{{ route('question', ['id' => $question->id, 'slug' => $question->slug], false) }}">
          {{ $question->body }} ({{ $question->answers_count }})
        </a>
      </li>
    @endforeach
  </ol>
@endsection