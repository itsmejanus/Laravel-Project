<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
{{ HTML::style('css/bootstrap.css') }}
{{ HTML::style('css/bootstrap-responsive.css') }}
</head>
<body>

        <div class="container">
          @if (!(Sentry::check()))
           @yield('content')
          @else
          {{ HTML::link('logout', 'logout', array('class'=>'pull-right'))}}
          @endif
        </div>
       

  </body></html>
  
  <!-- Navbar -->
         