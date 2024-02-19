<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('name')</title>
  <link rel="stylesheet" href="{{asset('build/assets/app-DsjCQBwc.css')}}">
</head>
<body>
  @include('layouts.partials.nav')
  <main class="page">
    @yield('content')
  </main>
  @include('layouts.partials.footer')
</body>
</html>