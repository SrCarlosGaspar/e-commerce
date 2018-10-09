@extends('layouts.site')

@section('content')
<!-- banner -->
		<div class="banner_inner">
			<div class="services-breadcrumb">
				<div class="inner_breadcrumb">

					<ul class="short">
						<li>
							<a href="index.html">Home</a>
							<i>|</i>
						</li>
						<li>Carrinho </li>
					</ul>
				</div>
			</div>

		</div>
		<!--//banner -->
	</div>
	<!--// header_top -->
	<!--checkout-->
	<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
		<div class="container">
			<div class="inner-sec-shop px-lg-4 px-3">
				<h3 class="tittle-w3layouts my-lg-4 mt-3">carrinho de Compra </h3>
				<div class="checkout-right">
					
					<table class="timetable_sub">
						<thead>
						
							<tr>
								<th>#id</th>
								<th>Produto</th>
								<th>Quantidade</th>
								<th>Nome do Produto</th>

								<th>Preço</th>
								<th>Remover</th>
							</tr>
						
						</thead>
						<tbody>
								@foreach($produtos as $produto)
							<tr class="rem3">
								<td class="invert">{{ $produto->id_produto }}</td>
								<td class="invert-image">
									<a href="single.html">
										<img src="{{ asset('storage/produtos/'.$produto->imagem) }}" alt=" " class="img-responsive">
									</a>
								</td>
								<td class="invert">
									<div class="quantity">
										<div class="quantity-select">											
											<div class="entry value">
												<span>{{ $produto->quant_car }}</span>
											</div>										
										</div>
									</div>
								</td>
								<td class="invert">{{ $produto->nome }}</td>

								<td class="invert">{{ $produto->preco }}</td>
								<td class="invert">
									<div class="rem">
										<a href="{{ url('eliminar-do-carrinho', $produto->id_ped_prod) }}"><div class="close3"> </div></a>
									</div>

								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
				<div class="checkout-left row">
					<div class="col-md-4 checkout-left-basket">
						<h4><a href=" {{ url('/produtos') }} ">Continue Comprando</a></h4>
						
					</div>
					<div class="col-md-8 address_form">
						<h4>Preencha o formulário</h4>
						<form action="{{ url('finalizar-pedido') }}" method="post" class="creditly-card-form agileinfo_form">
							<section class="creditly-wrapper wrapper">
								<div class="information-wrapper">
									<div class="first-row form-group">
										<div class="controls">
											{{ csrf_field() }}
											<label class="control-label">Nome Completo: </label>
											<input class="billing-address-name form-control" type="text" name="nome" placeholder="Nome Completo">
										</div>
										<div class="card_number_grids">
											<div class="card_number_grid_left">
												<div class="controls">
													<label class="control-label">Número de Telefone:</label>
													<input class="form-control" name="telefone" type="text" placeholder="Número de Telefone">
												</div>
											</div>
											<div class="card_number_grid_right">
												<div class="controls">
													<label class="control-label">E-mail: </label>
													<input class="form-control" name="email" type="text" placeholder="E-mail">
												</div>
											</div>
											<div class="clear"> </div>
										</div>
										<div class="controls">
											<label class="control-label">Endereço: </label>
											<input class="form-control" name="endereco" type="text" placeholder="Município, Bairro, Rua, Nº da Casa">
										</div>
										<div class="controls">
											<label class="control-label">Tipo de Endereço: </label>
											<select name="tipo_endereco" class="form-control option-w3ls">
												<option>Escritório</option>
												<option>Casa</option>
												<option>Mercado</option>

											</select>
										</div>
									</div>
									<button class="submit check_out">Finalizar Encomenda</button>
								</div>
							</section>
						</form>
						
					</div>

					<div class="clearfix"> </div>

				</div>

			</div>

		</div>
	</section>
    <!--//checkout-->
    @endsection