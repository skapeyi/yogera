<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  @if ( isset($page_title)):
  <title>{{$page_title}} | {{config('app.name', 'Laravel')}}</title>
  @else :
  <title>{{config('app.name', 'Laravel')}} - Be Heard</title>
  @endif
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
  <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">

  <link href="/css/imagehover.min.css" rel="stylesheet" type="text/css">
  <link href="/css/style.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
  integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Styles -->
  <link href="/css/app.css" rel="stylesheet">

  <!-- Scripts -->
  <script>
  window.Laravel = <?php echo json_encode([
    'csrfToken' => csrf_token(),
  ]); ?>
  </script>
</head>
<body>
  <div id="app">
    <nav class="navbar navbar-default navbar-static-top navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">

          <!-- Collapsed Hamburger -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
          data-target="#app-navbar-collapse">
          <span class="sr-only">Toggle Navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <!-- Branding Image -->
        <a class="navbar-brand" href="{{ url('/') }}">
          {{ config('app.name', 'Laravel') }}
        </a>
      </div>

      <div class="collapse navbar-collapse" id="app-navbar-collapse">
        <!-- Left Side Of Navbar -->
        <ul class="nav navbar-nav">
          &nbsp;
        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="nav navbar-nav navbar-right">
          <li><a href="/heros">Our heros</a></li>
          <li><a href="/situation">Report a situation</a></li>
          <li><a href="/know-your-rights">Know Your rights</a></li>
          <li><a href="/campaigns">Our campaigns</a></li>
          <li><a href="/about-us">About us</a></li>
          <li><a href="/blog">Blog</a></li>
          <li><a href="/contact">Contact</a></li>
          <!-- Authentication Links -->
          @if (Auth::guest())
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
            aria-expanded="false">
            Join  <span class="caret"></span>
          </a>

          <ul class="dropdown-menu" role="menu">
            <li><a href="{{ url('/login') }}">Login</a></li>
            <li><a href="{{ url('/register') }}">Register</a></li>

        </li>
      </ul>
    </li>

          @else
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
            aria-expanded="false">
            {{ Auth::user()->name }} <span class="caret"></span>
          </a>

          <ul class="dropdown-menu" role="menu">
            <li>
              <a href="{{ url('/logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              Logout
            </a>

            <form id="logout-form" action="{{ url('/logout') }}" method="POST"
            style="display: none;">
            {{ csrf_field() }}
          </form>
        </li>
      </ul>
    </li>
    @endif
  </ul>
</div>
</div>
</nav>

@yield('content')
</div>

<!--The Footer-->
<footer id="footer" class="footer">
  <div class="container text-center">
    <ul class="social-links">
      <li><a href="https://twitter.com/yogeraug" target="_blank"><i class="fa fa-twitter fa-fw"></i></a></li>
      <li><a href="https://www.facebook.com/yogeraUg/" target="_blank"><i class="fa fa-facebook fa-fw"></i></a></li>
      <li><a href="#link"><i class="fa fa-google-plus fa-fw"></i></a></li>
    </ul>
    © {!! date("Y") !!}
    <div class="credits">
    </div>
  </div>
</footer>

<!-- Scripts -->
<script src="/js/app.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>
<script src="contactform/contactform.js"></script>
<script src="https://use.fontawesome.com/52045bbe38.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
