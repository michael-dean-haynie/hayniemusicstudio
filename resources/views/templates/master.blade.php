<!-- master.blade.php -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield('title')</title>

    <!-- Bootstrap -->
    <link href={{URL::asset("bootstrap/css/bootstrap.min.css")}} rel='stylesheet'>
    <link href={{URL::asset("css/master.css")}} rel='stylesheet'>
    @yield('css')
		

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body
   {{--style='background: url("{{URL::asset('img/background.png')}}")  repeat;'--}}
   >
  	<div class="navbar navbar-default navbar-static-top" id="navigation">
      <div class="container-fluid">
        <ul class="nav nav-pills">
          <li role="presentation" id="nav-home"><a href={{URL::asset('/')}}>Home</a></li>
          <li role="presentation" id="nav-musikgarten"><a href={{URL::asset('/musikgarten')}}>MusikGarten</a></li>
          <li role="presentation" id="nav-private-lessons"><a href={{URL::asset('/private-lessons')}}>Private Lessons</a></li>
          <li role="presentation" id="nav-events"><a href={{URL::asset('/events')}}>Events</a></li>
          {{--<li role="presentation" id="nav-schedule"><a href={{URL::asset('/schedule')}}>Schedule</a></li>--}}
          <li role="presentation" id="nav-about"><a href={{URL::asset('/about')}}>About</a></li>
          <li role="presentation" id="nav-contact"><a href={{URL::asset('/contact')}}>Contact</a></li>
          @if(auth()->check())
            <li role="presentation" id="nav-admin"><a href={{URL::asset('admin')}}>Admin</a></li>
          @endif
        </ul>
        @if(auth()->check())
          <div class="login-logout">
            <p>Hello, {{auth()->user()->name}}<span class="inline"> | </span><a href={{url('/logout')}}>Logout</a></p>
         </div>
        @else
          <div class="login-logout">
            <a href={{url('/admin')}}>Admin</a>
            {{--<span class="inline"> | </span>--}}
            {{--<a href={{url('register')}}>Register</a>--}}
          </div>
        @endif
      </div>
	</div>
  @yield('content')
    <div class="footer">
      <div class="container-fluid">
          <div class="row">
              <?php
              if (isset($content)){
                echo "<p>Contact us at " . $content->find(20)['content'] . "</p>";
              }
              ?>
          </div>
      </div>
    </div>
    <script src="/ckeditor/ckeditor.js"></script>
    <script src={{URL::asset('js/replace-editors.js')}}></script>
    @yield('javascript')
  </body>
</html>
