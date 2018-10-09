@extends('layouts.painel')


@section('content')
<!-- START Template Main -->
        <section id="main" role="main">
            <!-- START Template Container -->
            <div class="container-fluid">
                <!-- Page Header -->
                <div class="page-header page-header-block">
                    <div class="page-header-section">
                        <h4 class="title semibold">Produtos Registados</h4>
                    </div>
                    <div class="page-header-section">
                        <div class="toolbar">
                            <div class="col-md-6 col-md-offset-6">
                            <form method="post" action="{{ url('search/produto') }}">
                                <div class="has-icon">                                   
                                    <input type="search" class="form-control" name="pesquisar_produto" id="shuffle-filter" placeholder="Pesquisa produto por nome">
                                    <i class="ico-search form-control-icon"></i> 
                                    {{ csrf_field() }}                                                                      
                                </div>
                            </form> 
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Page Header -->

                <!-- START Row -->
                <div class="row" id="shuffle-grid">
                    @forelse($produtos as $produto)
                    <div class="col-sm-6 col-md-4 shuffle">
                        <div class="panel widget">
                            <div class="table-layout nm">
                                <div class="col-xs-4 text-center"><img src="{{ asset('storage/produtos/'.$produto->imagem) }}" width="100%"></div>
                                <div class="col-xs-8 valign-middle">
                                    <div class="panel-body">
                                        <h5 class="semibold mt0 mb5"><a href="javascript:void(0);"></a>{{ $produto->nome }}</a></h5>
                                        <p class="text-muted nm"><b>Preço: </b> {{ number_format($produto->preco) }}Kz <b>Quant:</b> {{ $produto->quant }}</p>
                                        <p class="ellipsis text-muted mb5"><b>Descrição: </b> {{ $produto->descricao }}</p>
                                        <p class="ellipsis text-muted mb5"><a href="{{ route('produto.edit', $produto->id) }}"><i class="ico-edit mr5"></i>Editar</a> <-> <a href="{{ url('eliminar/produto/'.$produto->id) }}" onclick=" return confirm('Deseja Realmente Eliminar este Produto ?')"><i class="ico-trash mr5"></i>Eliminar</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="alert alert-danger">
                        <p><center>Não existe produto com este nome</center></p>
                    </div>
                    @endforelse

                </div>
                <!--/ END Row -->
            </div>
            <!--/ END Template Container -->

            <!-- START To Top Scroller -->
            <a href="#" class="totop animation" data-toggle="waypoints totop" data-showanim="bounceIn" data-hideanim="bounceOut" data-offset="50%"><i class="ico-angle-up"></i></a>
            <!--/ END To Top Scroller -->
        </section>
        <!--/ END Template Main -->
        @endsection