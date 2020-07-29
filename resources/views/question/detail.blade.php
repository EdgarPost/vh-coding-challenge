<h1>{{ $question->body }}</h1>

<h2>Answers</h2>
<ol>
  @foreach ($question->answers as $answer)
    <li>{{ $answer->body }}</li>
  @endforeach
</ol>