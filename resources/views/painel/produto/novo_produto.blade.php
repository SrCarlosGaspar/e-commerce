@extends('layouts.painel')


@section('content')
<section id="main" role="main">
    <!-- START Template Container -->
    <div class="container-fluid">


        <!-- START row -->
        <div class="row">
                <div class="col-md-2"></div>
            <div class="col-md-8">
             <form class="panel panel-default" method="post" action="{{ route('produto.store') }}" enctype="multipart/form-data" data-parsley-validate>               
         
                              
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="ico-dashboard2 mr5"></i>{{ $subtitulo or "Registar Novo Produto" }}</h3>
                        </div>               
                        <div class="panel-body">
                         {{ csrf_field() }}
                            <div class="form-group">
                                <div class="row">
                                 
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label class="control-label">Nome do Produto <span class="text-danger">*</span></label>
                                            <input name="nome" type="text" value="{{ old('nome') }} "  class="form-control" required>                                       
                                        </div>                                      
                                    </div>									
                                                                       
                                </div>
                            </div>
							
                            <div class="form-group">
                                <div class="row">
                                 
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label class="control-label">Imagem <span class="text-danger">*</span></label>
                                            <input name="imagem" type="file"  class="form-control" required>                                       
                                        </div>                                      
                                    </div>									
                                                                       
                                </div>
                            </div>
							
                            <div class="form-group">
                                <div class="row">                                 
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label class="control-label">Preço <span class="text-danger">*</span></label>                                         
                                            <input name="preco" type="text" value="{{ old('preco') }}"  class="form-control" required> 									
                                        </div>                                      
                                    </div>								
                                                                       
                                </div>
                            </div>
                            <div class="form-group">
                                    <div class="row">                                 
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <label class="control-label">Quantidade <span class="text-danger">*</span></label>                                         
                                                <input name="quant" type="text" value="{{ old('quant') }}"  class="form-control" required> 									
                                            </div>                                      
                                        </div>								
                                                                           
                                    </div>
                                </div>
							<div class="form-group">
                                <div class="row">                                 
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label class="control-label">Descrição <span class="text-danger">*</span></label>                                         
                                            <textarea name="descricao" class="form-control" rows="5" required>
                                                    {{ old('descricao') }}
                                            </textarea>										
                                        </div>                                      
                                    </div>								
                                                                       
                                </div>
                            </div>
							
                        </div>
                        <div class="panel-footer">
                            <button type="submit" class="btn btn-primary">Enviar Dados</button>
                            <button type="reset" class="btn btn-inverse">Cancelar</button>
                        </div>
                    </form>
            </div>


        </div>
        <!--/ END row -->
    </div>
    <!--/ END Template Container -->

    <!-- START To Top Scroller -->
    <a href="#" class="totop animation" data-toggle="waypoints totop" data-showanim="bounceIn" data-hideanim="bounceOut" data-offset="50%"><i class="ico-angle-up"></i></a>
    <!--/ END To Top Scroller -->
</section>
<!--/ END Template Main -->
@endsection
