<form method="POST" action="{{ route('postAnswer', ['id' => $questionId], false) }}">
    @csrf

    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach

    <div class="form-group row">
        <label for="body" class="col-sm-2 col-form-label">What is your anwser?</label>
        <div class="col-sm-10">
        <textarea class="form-control" name="body" id="body">{{ $body }}</textarea>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">&nbsp;</label>
        <div class="col-sm-10">
          <button type="submit" class="btn btn-primary">Answer</button>
        </div>
      </div>
</form>