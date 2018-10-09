<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>E-commerce</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Goggles a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="{{ url('assets/site/css/bootstrap.css') }}" rel='stylesheet' type='text/css' />
	<link href="{{ url('assets/site/css/login_overlay.css') }}" rel='stylesheet' type='text/css' />
	<link href="{{ url('assets/site/css/style6.css') }}" rel='stylesheet' type='text/css' />
	<link href="{{ url('assets/site/css/contact.css') }}" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="{{ url('assets/site/css/shop.css') }}" type="text/css" />
	<link rel="stylesheet" type="text/css" href="{{ url('assets/site/css/checkout.css') }}">
	<link rel="stylesheet" href="{{ url('assets/site/css/owl.carousel.css') }}" type="text/css" media="all">
	<link rel="stylesheet" href="{{ url('assets/site/css/owl.theme.css') }}" type="text/css" media="all">
	<link href="{{ url('assets/site/css/style.css') }}" rel='stylesheet' type='text/css' />
	<link href="{{ url('assets/site/css/fontawesome-all.css') }}" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	    rel="stylesheet">
</head>

<body>
	<div class="banner-top container-fluid" id="home">
		<!-- header -->
		<header>
			<div class="row">
				<div class="col-md-3 top-info text-left mt-lg-4">
					<h6>Apoio ao cliente</h6>
					<ul>
						<li>
							<i class="fas fa-phone"></i> Ligue</li>
						<li class="number-phone mt-3">991376895</li>
					</ul>
				</div>
				<div class="col-md-6 logo-w3layouts text-center">
					<h1 class="logo-w3layouts">
						<a class="navbar-brand" href="{{ url('/') }}">
							E-Commerce </a>
					</h1>
				</div>

				<div class="col-md-3 top-info-cart text-right mt-lg-4">
					<ul class="cart-inner-info">
						<li class="button-log">
							<a class="btn-open" href="#">
								<span class="fa fa-user" aria-hidden="true"></span>
							</a>
						</li>
						<li class="galssescart galssescart2 cart cart box_1">
							<form action="#" method="post" class="last">							
								<a class="top_googles_cart" href="{{ url('/carrinho') }}">
									Carrinho
									<i class="fas fa-cart-arrow-down"></i>
								</a>
							</form>
						</li>
					</ul>
					<!---->
					<div class="overlay-login text-left">
						<button type="button" class="overlay-close1">
							<i class="fa fa-times" aria-hidden="true"></i>
						</button>
						<div class="wrap">
							<h5 class="text-center mb-4">Faça Login</h5>
							<div class="login p-5 bg-dark mx-auto mw-100">
								<form action="{{ route('login') }}" method="post">
										{{ csrf_field() }}
									<div class="form-group">
										<label class="mb-2">E-mail</label>
										<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="">
										@if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
										<small id="emailHelp" class="form-text text-muted"></small>
									</div>
									<div class="form-group">
										<label class="mb-2">Senha</label>
										<input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="" required="">
										@if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
									</div>
									
									<button type="submit" class="btn btn-primary submit mb-4">iniciar Sessão</button>

								</form>
							</div>
							<!---->
						</div>
					</div>
					<!---->
				</div>
			</div>
			<div class="search">
				<div class="mobile-nav-button">
					<button id="trigger-overlay" type="button">
						<i class="fas fa-search"></i>
					</button>
				</div>
				<!-- open/close -->
				<div class="overlay overlay-door">
					<button type="button" class="overlay-close">
						<i class="fa fa-times" aria-hidden="true"></i>
					</button>
					<form action="{{ url('pesquisar') }}" method="post" class="d-flex">
						{{ csrf_field() }}
						
						<input class="form-control" type="text" name="nome" placeholder="Pesquisar produto" required="">
						<button type="submit" class="btn btn-primary submit">
							<i class="fas fa-search"></i>
						</button>
					</form>

				</div>
				<!-- open/close -->
			</div>
			<label class="top-log mx-auto"></label>
			<nav class="navbar navbar-expand-lg navbar-light bg-light top-header mb-2">

				<button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						
					</span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav nav-mega mx-auto">
						<li class="nav-item active">
							<a class="nav-link ml-lg-0" href="{{ url('/') }}">Principal
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{ url('/sobre') }}">Sobre</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{ url('/produtos') }}">Produtos</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{ url('/contacto') }}">Fale Connosco</a>
						</li>
				</div>
			</nav>
		</header>
		<!-- //header -->
		@yield('content')
	<!--footer -->
	<footer class="py-lg-5 py-3">
		<div class="container-fluid px-lg-5 px-3">
			<div class="row footer-top-w3layouts">
				<div class="col-lg-3 footer-grid-w3ls">
					<div class="footer-title">
						<h3>Sobre Nós</h3>
					</div>
					<div class="footer-text">
						<p>Curabitur non nulla sit amet nislinit tempus convallis quis ac lectus. lac inia eget consectetur sed, convallis at
							tellus. Nulla porttitor accumsana tincidunt.</p>
						<ul class="footer-social text-left mt-lg-4 mt-3">

							<li class="mx-2">
								<a href="#">
									<span class="fab fa-facebook-f"></span>
								</a>
							</li>
							<li class="mx-2">
								<a href="#">
									<span class="fab fa-twitter"></span>
								</a>
							</li>
							<li class="mx-2">
								<a href="#">
									<span class="fab fa-google-plus-g"></span>
								</a>
							</li>
							<li class="mx-2">
								<a href="#">
									<span class="fab fa-linkedin-in"></span>
								</a>
							</li>
							<li class="mx-2">
								<a href="#">
									<span class="fas fa-rss"></span>
								</a>
							</li>
							<li class="mx-2">
								<a href="#">
									<span class="fab fa-vk"></span>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 footer-grid-w3ls">
					<div class="footer-title">
						<h3>Nosso Endereço</h3>
					</div>
					<div class="contact-info">
						<h4>Local :</h4>
						<p>Avenida Deolinda Rodrigues, Estrada de Catete.</p>
						<div class="phone">
							<h4>Contactos :</h4>
							<p>Phone : +244 997 696 620</p>
							<p>Email :
								<a href="mailto:info@example.com">info@e-commerce.com</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 footer-grid-w3ls">
					<div class="footer-title">
						<h3>Link´s Rápidos</h3>
					</div>
					<ul class="links">
						<li>
							<a href="index.html">Home</a>
						</li>
						<li>
							<a href="about.html">About</a>
						</li>
						<li>
							<a href="404.html">Error</a>
						</li>
						<li>
							<a href="shop.html">Shop</a>
						</li>
						<li>
							<a href="contact.html">Contact Us</a>
						</li>
					</ul>
				</div>
				<div class="col-lg-3 footer-grid-w3ls">
					<div class="footer-title">
						<h3>Newslleter</h3>
					</div>
					<div class="footer-text">
						<p>By subscribing to our mailing list you will always get latest news and updates from us.</p>
						<form action="#" method="post">
							<input class="form-control" type="email" name="Email" placeholder="Enter your email..." required="">
							<button class="btn1">
								<i class="far fa-envelope" aria-hidden="true"></i>
							</button>
							<div class="clearfix"> </div>
						</form>
					</div>
				</div>
			</div>
			
		</div>
	</footer>
	<!-- //footer -->

	<!--jQuery-->
	<script src="{{ url('assets/site/js/jquery-2.2.3.min.js') }}"></script>
	<!-- newsletter modal -->
	<!-- Modal -->


	<!--search jQuery-->
	<script src="{{ url('assets/site/js/modernizr-2.6.2.min.js') }}"></script>
	<script src="{{ url('assets/site/js/classie-search.js') }}"></script>
	<script src="{{ url('assets/site/js/demo1-search.js') }}"></script>
	<!--//search jQuery-->
	<!-- cart-js -->

	<script>
		googles.render();

		googles.cart.on('googles_checkout', function (evt) {
			var items, len, i;

			if (this.subtotal() > 0) {
				items = this.items();

				for (i = 0, len = items.length; i < len; i++) {}
			}
		});
	</script>
	<!-- //cart-js -->
	<script>
		$(document).ready(function () {
			$(".button-log a").click(function () {
				$(".overlay-login").fadeToggle(200);
				$(this).toggleClass('btn-open').toggleClass('btn-close');
			});
		});
		$('.overlay-close1').on('click', function () {
			$(".overlay-login").fadeToggle(200);
			$(".button-log a").toggleClass('btn-open').toggleClass('btn-close');
			open = false;
		});
	</script>
	<!-- carousel -->
	<!-- Count-down -->
	<script src="{{ url('assets/site/js/simplyCountdown.js') }}"></script>
	<link href="{{ url('assets/site/css/simplyCountdown.css') }}" rel='stylesheet' type='text/css' />
	<script>
		var d = new Date();
		simplyCountdown('simply-countdown-custom', {
			year: d.getFullYear(),
			month: d.getMonth() + 2,
			day: 25
		});
	</script>
	<!--// Count-down -->
	<script src="{{ url('assets/site/js/owl.carousel.js') }}"></script>
	<script>
		$(document).ready(function () {
			$('.owl-carousel').owlCarousel({
				loop: true,
				margin: 10,
				responsiveClass: true,
				responsive: {
					0: {
						items: 1,
						nav: true
					},
					600: {
						items: 2,
						nav: false
					},
					900: {
						items: 3,
						nav: false
					},
					1000: {
						items: 4,
						nav: true,
						loop: false,
						margin: 20
					}
				}
			})
		})
	</script>

	<!-- //end-smooth-scrolling -->


	<!-- dropdown nav -->
	<script>
		$(document).ready(function () {
			$(".dropdown").hover(
				function () {
					$('.dropdown-menu', this).stop(true, true).slideDown("fast");
					$(this).toggleClass('open');
				},
				function () {
					$('.dropdown-menu', this).stop(true, true).slideUp("fast");
					$(this).toggleClass('open');
				}
			);
		});
	</script>
	<!-- //dropdown nav -->
  <script src="{{ url('assets/site/js/move-top.js') }}"></script>
    <script src="{{ url('assets/site/js/easing.js') }}"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            /*
            						var defaults = {
            							  containerID: 'toTop', // fading element id
            							containerHoverID: 'toTopHover', // fading element hover id
            							scrollSpeed: 1200,
            							easingType: 'linear' 
            						 };
            						*/

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!--// end-smoth-scrolling -->

	<script src="{{ url('assets/site/js/bootstrap.js') }}"></script>
	<!-- js file -->
</body>

</html>