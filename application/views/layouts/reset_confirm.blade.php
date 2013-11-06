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
          <form action="reset_confirm" class="navbar-form pull-right" id="login-form" method="POST" accept-char="UTF-8">
            e-mail <input type="email" class="span2" name="email" id="email" value="dr@a.a" placeholder="Email" required>
            code <input class="" type="text" readonly name="password" id="password" placeholder="Password" value="123456" required>
            <button class="btn btn-link" type="submit">Reset</button>
          </form>
          @else
          {{ HTML::link('logout', 'logout', array('class'=>'pull-right'))}}
          @endif
        </div>
        @yield('content')

  </body></html>