@extends('layouts.app')

@section('title', 'Questions')
@section('breadcrumb', 'Home')

@section('content')
<x-question-form />

<div class="mt-5">
  <h2 class="text-center">Questions</h2>
  <ol class="list-group">
    @foreach ($questions as $question)
    <li class="list-group-item">
      <a
        href="{{ route('question', ['id' => $question->id, 'slug' => $question->slug], false) }}">{{ $question->body }}</a>
      <span class="badge badge-primary">{{ $question->answers_count }}</span>
    </li>
    @endforeach
  </ol>
</div>
@endsection