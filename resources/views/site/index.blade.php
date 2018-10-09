@extends('layouts.site')

@section('content')
<!-- banner -->
		<div class="banner">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="carousel-item active">
						<div class="carousel-caption text-center">
							<h3>Qualidade Garantida
								<span>Produtos com grande qualidades</span>
							</h3>
							<a href="{{ url('/produtos') }}" class="btn btn-sm animated-button gibson-three mt-4">Comprar Agora</a>
						</div>
					</div>
					<div class="carousel-item item2">
						<div class="carousel-caption text-center">
							<h3>Bom Preço
								<span>O melhor preço do mercado</span>
							</h3>
							<a href="{{ url('/produtos') }}" class="btn btn-sm animated-button gibson-three mt-4">Comprar Agora</a>

						</div>
					</div>
					
					
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			<!--//banner -->
		</div>
	</div>
	<!--//banner-sec-->
	<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
		<div class="container-fluid">
			<div class="inner-sec-shop px-lg-4 px-3">
				<h3 class="tittle-w3layouts my-lg-4 my-4">Produtos Novos</h3>
				<div class="row">
					<!-- /womens -->
					@foreach($novos as $novo)					
					<div class="col-md-3 product-men women_two">
						<div class="product-googles-info googles">
							<div class="men-pro-item">
								<div class="men-thumb-item">
									<img src="{{ asset('storage/produtos/'.$novo->imagem) }}" class="img-fluid" alt="">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="{{ $novo->id }}" class="link-product-add-cart">Ver Produto</a>
										</div>
									</div>
									
								</div>
								<div class="item-info-product">

									<div class="info-product-price">
										<div class="grid_meta">
											<div class="product_price">
												<h4>
													<a href="single.html">{{ $novo->nome}} </a>
												</h4>
												<div class="grid-price mt-2">
													<span class="money ">{{ $novo->preco}}Kz</span>
												</div>
											</div>
											
										</div>
										
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
                    </div>
                    @endforeach
					<!-- /mens -->
				</div>
				<!--//row-->
				<!--/meddle-->
				<div class="row">
					<div class="col-md-12 middle-slider my-4">
						<div class="middle-text-info ">

							<h3 class="tittle-w3layouts two text-center my-lg-4 mt-3">Seja feliz nas compras</h3>
							
						</div>
					</div>
				</div>
				<!--//meddle-->
				<!--/slide-->
				<div class="slider-img mid-sec">
					<!--//banner-sec-->
					<div class="mid-slider">
						<div class="owl-carousel owl-theme row">
							@foreach($produtos as $produto)							
							<div class="item">
								<div class="gd-box-info text-center">
									<div class="product-men women_two bot-gd">
										<div class="product-googles-info slide-img googles">
											<div class="men-pro-item">
												<div class="men-thumb-item">
													<img src="{{ asset('storage/produtos/'.$produto->imagem) }}" class="img-fluid" alt="">
													<div class="men-cart-pro">
														<div class="inner-men-cart-pro">
															<a href="{{ $produto->id}}" class="link-product-add-cart">Ver</a>
														</div>
													</div>
													
												</div>
												<div class="item-info-product">

													<div class="info-product-price">
														<div class="grid_meta">
															<div class="product_price">
																<h4>
																	<a href="single.html">{{ $produto->nome}} </a>
																</h4>
																<div class="grid-price mt-2">
																	<span class="money ">{{ $produto->preco}}Kz</span>
																</div>
															</div>
															
														</div>
														<div class="googles single-item hvr-outline-out">
															<form action="#" method="post">
																<input type="hidden" name="id_produto" value="{{ $produto->id}}">																
																<button type="submit" class="googles-cart pgoogles-cart">
																	<i class="fas fa-cart-plus"></i>
																</button>
															</form>

														</div>
													</div>

												</div>
											</div>
										</div>
									</div>
								</div>
                            </div>
                            @endforeach
						</div>
					</div>
				</div>
				
            </div>
        </section>
        <!-- about -->
@endsection
