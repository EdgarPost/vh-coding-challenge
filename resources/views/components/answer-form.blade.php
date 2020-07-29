<form method="POST" action="{{ route('postAnswer', ['id' => $questionId], false) }}">
    @csrf

    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach

    <fieldset>
        <label for="body">What is your anwser to this question?</label>
        <textarea name="body" id="body">{{ $body }}</textarea>
    </fieldset>
    <button type="submit">Submit my answer</button>
</form>