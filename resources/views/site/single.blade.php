@extends('layouts.site')

@section('content')
<!-- banner -->
		<div class="banner_inner">
			<div class="services-breadcrumb">
				<div class="inner_breadcrumb">

					<ul class="short">
						<li>
							<a href="{{ url('/') }}">Principal </a>
							<i>|</i>
						</li>
						<li>{{ $product->nome }}</li>
					</ul>
				</div>
			</div>

		</div>
		
	</div>
		<!--//banner -->
		<!--/shop-->
		<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
			<div class="container">
				<div class="inner-sec-shop pt-lg-4 pt-3">
					<div class="row">
							<div class="col-lg-4 single-right-left ">
									<div class="grid images_3_of_2">
										<div class="flexslider1">
					
											<ul class="slides">
												<li data-thumb="images/d2.jpg">
													<div class="thumb-image"> <img src="{{ asset('storage/produtos/'.$product->imagem) }}" data-imagezoom="true" class="img-fluid" alt=" "> </div>
												</li>												
											</ul>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<div class="col-lg-8 single-right-left simpleCart_shelfItem">
									<h3>{{ $product->nome }}</h3>
									<p><span class="item_price">{{ $product->preco }}</span>										
									</p>
									
									
									<div class="color-quality">
										<div class="color-quality-right">
                                            <h5>Quantidade : {{ $product->quant }}</h5>
                                            <p>{{ $product->descricao }}</p>
											
										</div>
									</div>
									
									<div class="occasion-cart">
											<div class="googles single-item singlepage">
													<form action="{{ url('adicionar-carrinho') }}" method="post">
														{{ csrf_field() }}
														<input type="hidden" name="produto_id" value="{{ $product->id }}">
														<input type="number" placeholder="Quantidade" name="quant" min="1" max="{{ $product->quant }}" required>
														<button type="submit" class="googles-cart pgoogles-cart">
															Adicionar
														</button>
														
													</form>
		
												</div>
									</div>
																	</div>
								<div class="clearfix"> </div>
								
					</div>
				</div>
			</div>
				<div class="container-fluid">
					<!--/slide-->
					<div class="slider-img mid-sec mt-lg-5 mt-2 px-lg-5 px-3">
						<!--//banner-sec-->
						<h3 class="tittle-w3layouts text-left my-lg-4 my-3">Produtos Relacionados</h3>
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
																<a href="{{ route('produto.show', $produto) }}" class="link-product-add-cart">Ver</a>
															</div>
														</div>
													
													</div>
													<div class="item-info-product">

														<div class="info-product-price">
															<div class="grid_meta">
																<div class="product_price">
																	<h4>
																		<a href="single.html">{{ $produto->nome }} </a>
																	</h4>
																	<div class="grid-price mt-2">
																		<span class="money ">{{ $produto->preco }}Kz</span>
																	</div>
																</div>
																
															</div>
															<div class="googles single-item hvr-outline-out">
																	<form action="#" method="post">
																		<input type="hidden" name="cmd" value="_cart">																	
																		<input type="hidden" name="googles_item" value="Royal Son Aviator">
																		<input type="hidden" name="amount" value="425.00">
																		
																		
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
					<!--//slider-->
				</div>
		</section>
@endsection