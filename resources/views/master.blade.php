<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Slightly Used</title>
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body>
<!-- header goes here -->
  <nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">

      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Slightly Used</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="/items">Buy</a></li>
            <li><a href="#">Sell</a></li>
            <li><a href="#">Contact</a></li>
            <li><button type="button" class="btn btn-default navbar-btn">Sign in</button></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

  <div class="container">
      @yield('content')
<!-- footer goes here -->
  </div> <!--container -->
</body>
</html>