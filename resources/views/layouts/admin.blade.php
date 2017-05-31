<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} | Be Heard</title>

    <!-- Plugins-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">


    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
  <div>
    <nav class="navbar navbar-default navbar-static-top navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
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
              <li class="dropdown">
                <a aria-expanded="false" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" ria-expanded="false">
                  Celebrate/Shame  <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="/heros">Our heros</a></li>
                  <li><a href="/corrupt-officials">Shameless Officials</a></li>
                </ul>
              </li>

              <li class="dropdown">
                <a aria-expanded="false" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" ria-expanded="false">
                  Situations  <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="/situation">Report a situation</a></li>
                  <li><a href="/reported-situations">Reported Situations</a></li>
                </ul>
              </li>
              <li><a href="/know-your-rights">Know Your rights</a></li>
              <li><a href="/campaigns">Our campaigns</a></li>
              <li class="dropdown">
                <a aria-expanded="false" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" ria-expanded="false">
                  About Us  <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="/about-us">About us</a></li>
                  <li><a href="/contact">Contact</a></li>
                  <li><a href="/blog">Blog</a></li>
                </ul>
              </li>

              <!-- Authentication Links -->
              @if (Auth::guest())
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" ria-expanded="false">
                  Join  <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                  <li><a href="{{ url('/login') }}">Login</a></li>
                  <li><a href="{{ url('/register') }}">Register</a></li>
                </ul>
              </li>

              @else
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                  {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                  <li>
                    <a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                      Logout
                    </a>

                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
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

      <!--Flash messages at the top-->
      <div class="container" style="margin-top: 75px;">
        <div class="row">
          <div class="col-md-12">
            @if (session()->has('flash_notification.message'))
              <div class="alert alert-{{ session('flash_notification.level') }}">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {!! session('flash_notification.message') !!}
              </div>
            @endif
          </div>
        </div>
      </div>

      <div class="container">
          <div class="row">
              <div class="col-md-3">
                  <ul class="nav nav-sidebar">
                      <li><a href="/admin/stats">Statistics</a></li>
                      <li class="active"><a href="/admin">Users</a></li>
                      <li><a href="/admin/blogs">Blogs</a></li>
                      <li><a href="/admin/heros">Heros</a></li>
                      <li><a href="/admin/shames">Shames</a></li>
                      <li><a href="/admin/situations">Situations</a></li>
                      <li><a href="/admin/campaigns">Campaigns</a></li>
                      <li><a href="/admin/opinions">Public Opinions</a></li>
                      <li><a href="/admin/rights">Human Rights Articles</a></li>
                      <li><a href="/admin/parliament">Parliamentary Discussions</a></li>
                      <li><a href="/admin/incoming-sms">Incoming Messages</a></li>
                      <li><a href="/admin/outgoing-sms">Outgoing Messages</a></li>

                  </ul>
              </div>
              <div class="col-md-9">
                  @yield('content')
              </div>
          </div>
      </div>

  </div>
  <div class="navbar navbar-default navbar-fixed-bottom hidden-sm hidden-xs">
    <div class="container">
        <p class="navbar-text pull-left">© <?= date("Y")?>
            <a href="http://torodev.co.ug/" target="_blank">Yogera</a>
        </p>
        <ul class="nav navbar-nav nav-right pull-right">
            <li><a href="/terms-and-conditions">Terms and codititions</a></li>
            <li><a href="/privacy">Privacy policy</a></li>
            <li><a href="/faq">FAQ</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </div>
  </div>
  <!-- Scripts -->
  <script src="/js/app.js"></script>
  <script src="/js/custom.js"></script>
  <script src="https://use.fontawesome.com/52045bbe38.js"></script>
  <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>
  @stack('scripts')
</body>
</html>
