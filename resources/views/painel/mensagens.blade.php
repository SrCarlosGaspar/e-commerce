@extends('layouts.painel')

@section('content')
<!-- START Template Main -->
<section id="main" role="main">
    <!-- START Template Container -->
    <div class="container-fluid">

        <!-- START row -->
        <div class="row">
            <div class="col-sm-12">
                @if(session('success-forma'))
                <div class="alert alert-{{ session('success-medicamento')['type'] }}">
                    <center><p>{{ session('success-medicamento')['messages'] }}</p></center>
                </div>
                @endif
            </div>
            <div class="col-md-12">
                <!-- START panel -->
                <div class="panel panel-primary">
                    <!-- panel heading/header -->
                    <div class="panel-heading">
                        <h3 class="panel-title"><span class="panel-icon mr5"><i class="ico-table22"></i></span>Mensagens Enviadas</h3>
                        <!-- panel toolbar -->
                        <div class="panel-toolbar text-right">
                            <!-- option -->
                            <div class="option">
                                <button class="btn up" data-toggle="panelcollapse"><i class="arrow"></i></button>
                                <button class="btn" data-toggle="panelremove" data-parent=".col-md-12"><i class="remove"></i></button>
                            </div>
                            <!--/ option -->
                        </div>
                        <!--/ panel toolbar -->
                    </div>
                    <!--/ panel heading/header -->
                    <!-- panel toolbar wrapper -->
                    <div class="panel-toolbar-wrapper pl0 pt5 pb5">
                       
                        <div class="panel-toolbar text-right">
                            <div class="btn-group">
                                
                            </div>                             
                        </div>
                    </div>
                    <!--/ panel toolbar wrapper -->

                    <!-- panel body with collapse capabale -->
                    <div class="table-responsive panel-collapse pull out">
                        <table class="table table-bordered table-hover" id="table1">
                            <thead>
                                <tr>                                   
                            <th><center>Nome do Usuário</center></th>
                            <th><center>E-mail</center></th>
                            <th><center>Assunto</center></th> 
                            <th><center>Mensagem</center></th> 
                            <th><center>Data da Mensagem</center></th>                                    
                            <th><center>Opções</center></th>
                            
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($mensagens as $mensagen)
                                <tr>
                            <td><center>{{ $mensagen->nome }}</center></td>
                            <td><center>{{ $mensagen->email }}</center></td>
                            <td><center>{{ $mensagen->assunto }}</center></td>
                            <td><center>{{ $mensagen->mensagem }}</center></td>
                            <td><center>{{ $mensagen->created_at }}</center></td>


                            <td class="text-center">
                                <!-- button toolbar -->
                                <div class="panel-toolbar text-right">
                                    <center>
                                        <div class="btn-group">                                                                                                                            
                                            
                                            <a href="{{ route('mensagem.destroy',$mensagen->id) }}" class="btn btn-sm btn-danger"><i class="ico-trash"></i> Eliminar</a>
                                        </div>
                                    </center>                                           
                                </div>
                                <!--/ button toolbar -->
                            </td>
                            </tr> 
                            @endforeach

                            </tbody>
                        </table>                       
                    </div>

                    <!--/ panel body with collapse capabale -->
                </div>
            
                    {{ $mensagens->links() }}
 
                  
        
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