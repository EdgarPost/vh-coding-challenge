<form method="POST" action="{{ route('postQuestion', [], false) }}">
  @csrf

  <div class="form-group">
    <label for="body">What is your question?</label>
    <textarea class="form-control" name="body" id="body" placeholder="{{ $placeholder }}">{{ $body }}</textarea>
  </div>
  <x-form-errors />
  <div class="form-group">
    <button type="submit" class="btn btn-primary">Ask</button>
  </div>
</form>