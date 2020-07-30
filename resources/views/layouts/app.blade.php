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
    <div class="container">
      <h1>@yield('title')</h1>

      @if (session('status'))
        <div>
          {{ session('status') }}
        </div>
      @endif

      @yield('content')
    </div>
  </body>
</html>