<h1>Questions</h1>

<ol>
  @foreach ($questions as $question)
    <li>
      <a href="{{ route('question', ['id' => $question->id, 'slug' => $question->slug], false) }}">
        {{ $question->body }} ({{ $question->answers_count }})</li>
      </a>
  @endforeach
</ol>