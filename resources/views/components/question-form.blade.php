<form method="POST" action="{{ route('postQuestion', [], false) }}">
    @csrf

    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach

    <fieldset>
        <label for="body">What is your question?</label>
        <textarea name="body" id="body">{{ $body }}</textarea>
    </fieldset>
    <button type="submit">Submit my question</button>
</form>