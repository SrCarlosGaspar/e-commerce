@extends('layouts.site')

@section('content')
<div class="banner_inner">
    <div class="services-breadcrumb">
        <div class="inner_breadcrumb">

            <ul class="short">
                <li>
                    <a href="{{ url('/')}}">Principal</a>
                    <i>|</i>
                </li>
                <li>Sobre Nós</li>
            </ul>
        </div>
    </div>

</div>
<!--//banner -->
</div>
<!--// header_top -->
<!-- top Products -->
<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
<div class="container-fluid">

    <div class="inner-sec-shop px-lg-4 px-3">
        <div class="about-content py-lg-5 py-3">
            <div class="row">

                <div class="col-lg-6 p-0">
                    <img src="{{ url('assets/site/images/banner1.jpg') }}" alt="Goggles" class="img-fluid">
                </div>
                <div class="col-lg-6 about-info">
                    <h3 class="tittle-w3layouts text-left mb-lg-5 mb-3">About Us</h3>
                    <p class="my-xl-4 my-lg-3 my-md-4 my-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                        dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
                        book.
                    </p>                    
                </div>
            </div>
        </div>
        
        </div>
       
       
    </div>
    <!-- /testimonials -->
    <div class="testimonials py-lg-4 py-3 mt-4">
        <div class="testimonials-inner py-lg-4 py-3">
            <h3 class="tittle-w3layouts text-center my-lg-4 my-4">Testemunhos</h3>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="testimonials_grid text-center">
                            <h3>Anamaria
                                <span>Customer</span>
                            </h3>
                            <label>United States</label>
                            <p>Maecenas interdum, metus vitae tincidunt porttitor, magna quam egestas sem, ac scelerisque nisl nibh vel lacus.
                                Proin eget gravida odio. Donec ullamcorper est eu accumsan cursus.</p>
                        </div>
                    </div>
                    
                    <div class="carousel-item">
                        <div class="testimonials_grid text-center">
                            <h3>Gretchen
                                <span>Customer</span>
                            </h3>
                            <label>United States</label>
                            <p>Maecenas interdum, metus vitae tincidunt porttitor, magna quam egestas sem, ac scelerisque nisl nibh vel lacus.
                                Proin eget gravida odio. Donec ullamcorper est eu accumsan cursus.</p>
                        </div>
                    </div>
                    <a class="carousel-control-prev test" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="fas fa-long-arrow-alt-left"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next test" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="fas fa-long-arrow-alt-right" aria-hidden="true"></span>
                        <span class="sr-only">Próximo</span>

                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- //testimonials -->
				<div class="row galsses-grids pt-lg-5 pt-3">
					<div class="col-lg-6 galsses-grid-left">
						<figure class="effect-lexi">
							<img src="images/banner4.jpg" alt="" class="img-fluid">
							<figcaption>
								<h3>Editor's
									<span>Pick</span>
								</h3>
								<p> Express your style now.</p>
							</figcaption>
						</figure>
					</div>
					<div class="col-lg-6 galsses-grid-left">
						<figure class="effect-lexi">
							<img src="images/banner1.jpg" alt="" class="img-fluid">
							<figcaption>
								<h3>Editor's
									<span>Pick</span>
								</h3>
								<p>Express your style now.</p>
							</figcaption>
						</figure>
					</div>
				</div>
				<!-- /grids -->
				<div class="bottom-sub-grid-content py-lg-5 py-3">
					<div class="row">
						<div class="col-lg-4 bottom-sub-grid text-center">
							<div class="bt-icon">

								<span class="far fa-hand-paper"></span>
							</div>

							<h4 class="sub-tittle-w3layouts my-lg-4 my-3">Satisfação Garantida</h4>
							<p>Faça a sua compra com a garantia de ter uma boa experiência.</p>
							<p>
								<a href="shop.html" class="btn btn-sm animated-button gibson-three mt-4">Compra Agora</a>
							</p>
						</div>
						<!-- /.col-lg-4 -->
						<div class="col-lg-4 bottom-sub-grid text-center">
							<div class="bt-icon">
								<span class="fas fa-rocket"></span>
							</div>

							<h4 class="sub-tittle-w3layouts my-lg-4 my-3">Entrega Rápida</h4>
							<p>Depois de efectuar a compra a entrega é efectuda até 3 dias após a compra e com segurança.</p>
							<p>
								<a href="shop.html" class="btn btn-sm animated-button gibson-three mt-4">Compra Agora</a>
							</p>
						</div>
						<!-- /.col-lg-4 -->
						<div class="col-lg-4 bottom-sub-grid text-center">
							<div class="bt-icon">
								<span class="far fa-sun"></span>
							</div>

							<h4 class="sub-tittle-w3layouts my-lg-4 my-3">Seguro e Confiável</h4>
							<p>Esteja descançado que os dados são tratados com a máxima confidencialidade.</p>
							<p>
								<a href="shop.html" class="btn btn-sm animated-button gibson-three mt-4">Compra Agora</a>
							</p>
						</div>
						<!-- /.col-lg-4 -->
					</div>
				</div>
				<!-- //grids -->
				<!-- /clients-sec -->
				<div class="testimonials p-lg-5 p-3 mt-4">
					<div class="row last-section">
						<div class="col-lg-3 footer-top-w3layouts-grid-sec">
							<div class="mail-grid-icon text-center">
								<i class="fas fa-gift"></i>
							</div>
							<div class="mail-grid-text-info">
								<h3>Genuine Product</h3>
								<p>Lorem ipsum dolor sit amet, consectetur</p>
							</div>
						</div>
						<div class="col-lg-3 footer-top-w3layouts-grid-sec">
							<div class="mail-grid-icon text-center">
								<i class="fas fa-shield-alt"></i>
							</div>
							<div class="mail-grid-text-info">
								<h3>Secure Products</h3>
								<p>Lorem ipsum dolor sit amet, consectetur</p>
							</div>
						</div>
						<div class="col-lg-3 footer-top-w3layouts-grid-sec">
							<div class="mail-grid-icon text-center">
								<i class="fas fa-dollar-sign"></i>
							</div>
							<div class="mail-grid-text-info">
								<h3>Cash on Delivery</h3>
								<p>Lorem ipsum dolor sit amet, consectetur</p>
							</div>
						</div>
						<div class="col-lg-3 footer-top-w3layouts-grid-sec">
							<div class="mail-grid-icon text-center">
								<i class="fas fa-truck"></i>
							</div>
							<div class="mail-grid-text-info">
								<h3>Easy Delivery</h3>
								<p>Lorem ipsum dolor sit amet, consectetur</p>
							</div>
						</div>
					</div>
				</div>
				<!-- //clients-sec -->
			</div>
		
</div>
</section>

@endsection