<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Shareload - @yield('title')</title>

    <!-- Bootstrap -->
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"> 
	<!-- Custom -->
	<style>
		.container-fixed{
		padding-top: 70px;	
		}
	</style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	 @section('sidebar')
	<nav class="navbar navbar-default navbar-fixed-top">
	  <div class="container-fluid">
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span> 
		  </button>
		  <a class="navbar-brand" href="/">SHARELOAD</a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
		 
		  <ul class="nav navbar-nav navbar-right">
			<li><a href="about">About Us</a></li>
			<li><a href="contact">Contact Us</a></li>
		  </ul>
		</div>
	  </div>
	</nav>
     @show
   
     @yield('content')
 
 <div class="container">
 <hr>
 <p>&copy Shareload 2018 <a href="/about">About Us</a> <a href="/contact">Contact Us</a> <a href="privacy">Privacy Policies</a> <a href="/tnc">Term & Condition	</a></p> 
 </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  </body>
</html>