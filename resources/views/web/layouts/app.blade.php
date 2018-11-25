<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>E-KakiLima - @yield('title')</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<nav  id="Top" class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(237, 41, 57)">
			<div class="container">
				<a href="url('/')" class="navbar-brand text-white"><img src="img/ekakilima2	.png" width="200"></a>
				<div class="justify-content-center">
					<ul class="nav">
						<li class="nav-item pull-sm-left">
							<a href="url('/')" class="nav-link text-white">Beranda</a>
						</li>
						<li class="nav-item">
							<a href="#about" class="nav-link text-white">Tentang Kami</a>
						</li>
						<li class="nav-item">
							<a href="#pedagang" class="nav-link text-white">Pedagang Kaki Lima?</a>
						</li>
					</ul>
				</div>
				@if(Auth::check())
				<a href="{{ url('http://e-kakilima.test/admin/dashboard') }}" class="btn btn-primary btn-md">Admin Panel</a>
				@else
				<a href="{{ Route('login') }}" class="btn btn-primary btn-md">Login</a>
				@endif
			</div>
		</nav>
		@yield('content')
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-4 left">
						<p style="font-size: 40px;">E-KakiLima</p>
						<p>E-KakiLima adalah Website yang menyediakan lahan untuk tempat berjualan pedagang kaki lima</p>
					</div>
					<div class="col-md-5 center">
						<p class="text-white">Ikuti Kami</p>
						<a href="url('www.facebook.com')" class="text-white"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
						<a href="url('www.instagram.com')" class="text-white"><i class="fa fa-instagram" aria-hidden="true"></i></a>
						<a href="url('www.twitter.com')" class="text-white"><i class="fa fa-twitter" aria-hidden="true"></i></a>
					</div>
					<div class="col-md-3" style="padding-top: 30px;">
						<h5>Berlangganan dengan kami</h5>
						<form class="form-inline">
							<div class="form-group mx-sm-3">
								<input type="email" class="form-control" placeholder="email.@example.com">
								<button class="btn btn-primary">Subscribe</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				&copy; 2018 <span class="text-white">E-KakiLima | Made with</span>&nbsp;<i class="fa fa-code" aria-hidden="true"></i>
				<button class="btn" id="back" style="float: right;"><i class="fa fa-arrow-up" aria-hidden="true"></i>
				</button>
			</div>
		</footer>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script type="text/javascript">
		// $('#back').on('click', function() {
		// $('html, body').animate({
		// scrollTop: 0
		// }, 2000); // for all browsers
		// });
		$('a[href*="#"]').on('click', function (e) {
		e.preventDefault();
		$('html, body').animate({
		scrollTop: $($(this).attr('href')).offset().top
		}, 1300, 'linear');
		});
		</script>


		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>