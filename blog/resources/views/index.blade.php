<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" id="font-awesome-css" href="//netdna.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" type="text/css" media="all">
	
	<link rel="stylesheet" href="{{asset('public/css.css')}}">
</head>
<body>
	<header class="container-fluid row">
			<section class="col-md-3 logo">Logo</section>
			<section class="col-md-9 banner">Banner</section>
	</header>
	<nav>
		<section class="col-md-2"><a href="{{url('/')}}">Home</a></section>
		<section class="col-md-2"><a href="{{url('news')}}">News</a></section>
		<section class="col-md-2"><a href="{{url('feedback')}}">Feedback</a></section>
		<section class="col-md-2"><a href="{{url('cart')}}">Cart</a></section>
		@if(session('user'))
			<section class="col-md-4">Hello: {{session('user')}} [<a href="{{url('logout')}}">Logout</a>]</section>
		@else
			<section class="col-md-2"><a href="{{url('signin')}}">Sign in</a></section>
			<section class="col-md-2"><a href="{{url('register')}}">Register</a></section>
		@endif
	</nav>



	<aside>
		@include('layout\left')
	</aside>
	<article>
		@yield('content')
	</article>
	<aside>
		@include('layout\right')
	</aside>
	<footer>Footer</footer>
</body>
</html>