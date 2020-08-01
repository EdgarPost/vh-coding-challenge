<form method="POST" action="{{ route('postAnswer', ['id' => $questionId], false) }}">
    @csrf

    <x-form-errors />

    <div class="form-group">
        <label for="body">What is your anwser?</label>
        <textarea class="form-control" name="body" id="body">{{ $body }}</textarea>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Answer</button>
        <a href="{{ route('questions', [], false) }}" class="btn btn-link">Back to the list</a>
    </div>
</form>