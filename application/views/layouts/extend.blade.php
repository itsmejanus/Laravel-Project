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
          <form action="login" class="navbar-form pull-right" id="login-form" method="POST" accept-char="UTF-8">
            e-mail <input type="email" class="span2" name="email" id="email" value="" placeholder="Email" required>
            password <input class="" type="password" name="password" id="password" placeholder="Password" required>
            <button class="btn btn-link" type="submit">log-in</button> | sign-up
          </form>
          @else
          {{ HTML::link('logout', 'logout', array('class'=>'pull-right'))}}
          @endif
        </div>
        @yield('content')

  </body></html>