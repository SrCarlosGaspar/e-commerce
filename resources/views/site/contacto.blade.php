@extends('layouts.site')

@section('content')

<div class="banner_inner">
    <div class="services-breadcrumb">
        <div class="inner_breadcrumb">

            <ul class="short">
                <li>
                    <a href="index.html">Principal</a>
                    <i>|</i>
                </li>
                <li>Contacte-nos</li>
            </ul>
        </div>
    </div>

</div>
<!--//banner -->
</div>
<!--// header_top -->
<!-- top Products -->
<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
<div class="container">
    <h3 class="tittle-w3layouts text-center my-lg-4 my-4">Contactos</h3>
    <div class="inner_sec">
        <p class="sub text-center mb-lg-5 mb-3">Nós amamos trocar ideias</p>
        <div class="address row">

            <div class="col-lg-4 address-grid">
                <div class="row address-info">
                    <div class="col-md-3 address-left text-center">
                        <i class="far fa-map"></i>
                    </div>
                    <div class="col-md-9 address-right text-left">
                        <h6>Endereço</h6>
                        <p> Luanda, Angola

                        </p>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 address-grid">
                <div class="row address-info">
                    <div class="col-md-3 address-left text-center">
                        <i class="far fa-envelope"></i>
                    </div>
                    <div class="col-md-9 address-right text-left">
                        <h6>Email</h6>
                        <p>
                            <a href="mailto:example@email.com"> geral@e-commerce.com</a>

                        </p>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 address-grid">
                <div class="row address-info">
                    <div class="col-md-3 address-left text-center">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <div class="col-md-9 address-right text-left">
                        <h6>Telemóvel</h6>
                        <p>+244 997 696 620</p>

                    </div>

                </div>
            </div>
        </div>
        <div class="contact_grid_right">
            <form action="{{ route('mensagem.store') }}" method="post">
                {{ csrf_field() }}
                <div class="row contact_left_grid">
                    <div class="col-md-6 con-left">
                        <div class="form-group">
                            <label class="my-2">Nome</label>
                            <input class="form-control" type="text" name="nome" placeholder="" required="">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" type="email" name="email" placeholder="" required="">
                        </div>
                        <div class="form-group">
                            <label class="my-2">Assunto</label>
                            <input class="form-control" type="text" name="assunto" placeholder="" required="">
                        </div>
                    </div>
                    <div class="col-md-6 con-right">
                        <div class="form-group">
                            <label>Mensagem</label>
                            <textarea id="textarea" class="form-control" name="mensagem" placeholder="" required=""></textarea>
                        </div>
                        <input class="form-control" type="submit" value="Enviar Mensagem">

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</section>

@endsection
