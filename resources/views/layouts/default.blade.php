<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>@yield('title','Weibo App y') - 由 Luis 制作的weibo</title>
</head>
<body>
  @include('layouts._header')

  <div class="container">
    <div class="offset-md-1 col-md-10">
      @include('shared._messages')
      @yield('content')
      @include('layouts._footer')
    </div>
  </div>
  <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
