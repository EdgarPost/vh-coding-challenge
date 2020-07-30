<form method="POST" action="{{ route('postQuestion', [], false) }}">
    @csrf

    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach

    <div class="form-group row">
        <label for="body" class="col-sm-2 col-form-label">What is your question?</label>
        <div class="col-sm-10">
        <textarea class="form-control" name="body" id="body">{{ $body }}</textarea>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">&nbsp;</label>
        <div class="col-sm-10">
          <button type="submit" class="btn btn-primary">Ask</button>
        </div>
      </div>
</form>