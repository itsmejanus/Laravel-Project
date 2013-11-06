<!DOCTYPE html>
<html>
<head>
<title>{{$title}}</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
@yield('page_scripts')

<!-- Le styles -->
{{ HTML::script('js/jquery-2.0.0.min.js'); }}
{{ HTML::style('css/bootstrap.css'); }}
<style type="text/css">
0 	  /* Set the fixed height of the footer here */
      #push,  #footer {
 height: 100px;
}
#footer {
	padding: 10px 0px 10px 20px;
	background-color: #63656a;
}
/* Textual links in masthead */
.masthead-links {
	margin: 0;
	list-style: none;
	color: #ffffff;
}
.masthead-links li {
	display: inline;
	padding: 10px 20px 10px 0px;
}
.masthead-links li a {
	color: #ffffff;
}
.masthead-links li a:hover {
	color: #ffffff;
}
.footer-links {
	margin: 0;
	list-style: none;
	color: #99999a;
	padding-top: 10px;
}
.footer-links li {
	display: inline;
	padding: 10px 20px 10px 0px;
	color: #99999a;
}
.footer-links li a {
	color: #99999a;
}
.footer-links li a:hover,  .footer-links li a:focus {
	color: #99999a;
}
.profilename {
	padding: 20px 20px 20px 20px;
	font-size: 16px;
	font-weight: bold;
	color: #000000;
}
.profilename img {
	padding-right: 10px
}
.profiletab {
	padding: 10px 20px 10px 20px;
	font-size: 12px;
	color: #000000 !important;
}
.currentprofiletab {
	padding: 10px 20px 10px 20px;
	font-size: 12px;
	color: #ff0000;
}
.table {
	/*width: 100%;*/
  width: 650px;
	margin-top: 30px;
}
.paddingRight5 {
padding-right: 5px;
}
      /* Lastly, apply responsive CSS fixes as necessary */
      @media (max-width: 767px) {
#footer {
	margin-left: -20px;
	margin-right: -20px;
	padding-left: 20px;
	padding-right: 20px;
}
}
</style>
</head>
<body>
<div class="container">
<div class="row">
  <div class="span470"><a href="<?php echo substr($_SERVER['PHP_SELF'],0,-9);?>testpage">{{HTML::image('img/logo.png');}}</a> </div>
</div>
<div class="navbar">
  <div class="container">
    <ul class="nav">
      <li><a href="<?php echo substr($_SERVER['PHP_SELF'],0,-9);?>testpage">My Account</a></li>
      <li><a href="<?php echo substr($_SERVER['PHP_SELF'],0,-9);?>myconnections">My Connections</a></li>
      <li><a href="<?php echo substr($_SERVER['PHP_SELF'],0,-9);?>hospitals">My Hospitals</a></li>
      <li><a href="<?php echo substr($_SERVER['PHP_SELF'],0,-9);?>allmessages">My Messages</a></li>
    </ul>
    <div class="nav pull-right">
      <ul class="nav">
        <li><a href="<?php echo substr($_SERVER['PHP_SELF'],0,-9);?>hospitalsearch">{{HTML::image('img/recruiter/icon_hospital.gif');}} Find Hospitals</a></li>
      </ul>
    </div>
  </div>
</div>
</div>
<div class="container">
@yield('content');
</div>
{{ HTML::script('js/jquery-1.10.2.min.js'); }}
{{ HTML::script('js/bootstrap.js'); }}
@yield('scripts')
</body>
</html>