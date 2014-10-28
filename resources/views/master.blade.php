<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Slightly Used</title>
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body>

    @include('partials.header')

    <div class="container" style="width: 72%">
        @yield('content')
    </div>

    @include('partials.footer')

  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>