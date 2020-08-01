<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <script src="{{ asset('js/app.js') }}"></script>
  <title>Vegan Hacktivist Coding Challenge - @yield('title')</title>
</head>

<body>
  <div class="container shadow-lg p-3 mb-5 bg-white rounded bg-white my-5 p-5">
    <h1 class="text-center mb-5">Veganism Q+A</h1>

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-5">
        <li class="breadcrumb-item"><a href="{{ route('questions', [], false) }}">Questions</a></li>
        @hasSection('breadcrumb')
        <li class="breadcrumb-item active" aria-current="page">@yield('breadcrumb')</li>
        @endif

      </ol>
    </nav>

    @if (session('status'))
    <div>
      {{ session('status') }}
    </div>
    @endif

    @yield('content')
  </div>
</body>

</html>