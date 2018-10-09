@extends('layouts.site')

@section('content')

<!-- banner -->
		<div class="banner_inner">
			<div class="services-breadcrumb">
				<div class="inner_breadcrumb">

					<ul class="short">
						<li>
							<a href="{{ url('/') }}">Principal</a>
							<i>|</i>
						</li>
						<li>Produtos</li>
					</ul>
				</div>
			</div>

		</div>
		<!--//banner -->
<!--/shop-->
		<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
			<div class="container-fluid">
				<div class="inner-sec-shop px-lg-4 px-3">
					<h3 class="tittle-w3layouts my-lg-4 mt-3">Nossos Produtos</h3>
					<div class="row">
						
						<!--/product right-->
						<div class="left-ads-display col-lg-12">
							<div class="wrapper_top_shop">
								
								<div class="row">
                                    <!-- /womens -->
                                    @foreach($produtos as $produto)
									<div class="col-md-3 product-men women_two shop-gd">
										<div class="product-googles-info googles">
											<div class="men-pro-item">
												<div class="men-thumb-item">
													<img src="{{ asset('storage/produtos/'.$produto->imagem) }}" class="img-fluid" alt="">
													<div class="men-cart-pro">
														<div class="inner-men-cart-pro">
															<a href="{{ route('produto.show', $produto) }}" class="link-product-add-cart">Ver</a>
														</div>
													</div>
													
												</div>
												<div class="item-info-product">
													<div class="info-product-price">
														<div class="grid_meta">
															<div class="product_price">
																<h4>
																	<a href="single.html">{{ $produto->nome }}</a>
																</h4>
																<div class="grid-price mt-2">
																	<span class="money ">{{ $produto->preco }}Kz</span>
																</div>
															</div>															
														</div>
														<div class="googles single-item hvr-outline-out">
															<form action="#" method="post">
																<input type="hidden" name="cmd" value="_cart">
																<input type="hidden" name="add" value="1">
																<input type="hidden" name="googles_item" value="Farenheit">
																<input type="hidden" name="amount" value="575.00">
																<button type="submit" class="googles-cart pgoogles-cart">
																	<i class="fas fa-cart-plus"></i>
																</button>
															</form>

														</div>
													</div>
													<div class="clearfix"></div>
												</div>
											</div>
										</div>
                                    </div>
                                    @endforeach
										</div>
							</div>
						</div>
						<!--//product right-->
					</div>
					
				</div>
			</div>
        </section>
        @endsection