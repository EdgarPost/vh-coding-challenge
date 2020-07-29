<html>
  <head>
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