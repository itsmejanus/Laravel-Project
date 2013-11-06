<!DOCTYPE html>
<html>
<head>
  <title>{{$title}}</title>
{{ HTML::style('css/bootstrap.css') }}
{{ HTML::style('css/bootstrap-responsive.css') }}
{{ HTML::script('js/jquery-2.0.0.min.js') }}
</head>
<body>

        <div class="container">
          @if (!(Sentry::check()))
          <div style="float:right;">
          <div style="float:left;margin-left:5px;font-size:12px;">{{ HTML::link('login', 'Login', array('class'=>'pull-right'))}}</div>
          <div style="float:left;margin-left:5px;font-size:12px;">{{ HTML::link('signup', 'Signup', array('class'=>'pull-right'))}}</div>
          </div>
          @else
          {{ HTML::link('logout', 'logout', array('class'=>'pull-right'))}}
          @endif
        </div>
         
        @yield('content')
       

  </body></html>