<!DOCTYPE html>
<!-- 
TEMPLATE NAME : Adminre - backend
VERSION : 1.3.0
AUTHOR : JohnPozy
AUTHOR URL : http://themeforest.net/user/JohnPozy
EMAIL : pampersdry@gmail.com
LAST UPDATE: 2015/01/05

** A license must be purchased in order to legally use this template for your project **
** PLEASE SUPPORT ME. YOUR SUPPORT ENSURE THE CONTINUITY OF THIS PROJECT **
-->
<html class="backend">
    <!-- START Head -->
    <head>
        <!-- START META SECTION -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>{{ $titulo or "Vendas Online" }}</title>
        <meta name="author" content="pampersdry.info">
        <meta name="description" content="Adminre is a clean and flat backend and frontend theme build with twitter bootstrap">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../image/touch/apple-touch-icon-144x144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../image/touch/apple-touch-icon-114x114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../image/touch/apple-touch-icon-72x72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="../image/touch/apple-touch-icon-57x57-precomposed.png">
        <link rel="shortcut icon" href="../image/favicon.ico">
        <!--/ END META SECTION -->

        <!-- START STYLESHEETS -->
        <!-- Plugins stylesheet : optional -->
        <link rel="stylesheet" href="{{ url('assets/painel/plugins/selectize/css/selectize.css') }}">
        <link rel="stylesheet" href="{{ url('assets/painel/plugins/flot/css/flot.css') }}">
        <!--/ Plugins stylesheet : optional -->

        <!-- Application stylesheet : mandatory -->
        <link rel="stylesheet" href="{{ url('assets/painel/stylesheet/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ url('assets/painel/stylesheet/layout.css') }}">
        <link rel="stylesheet" href="{{ url('assets/painel/stylesheet/uielement.css') }}">
        <!--/ Application stylesheet -->

        <!-- Theme stylesheet : optional -->
        <!--/ Theme stylesheet : optional -->

        <!-- modernizr script -->
        <script type="text/javascript" src="{{ url('assets/painel/plugins/modernizr/js/modernizr.js') }}"></script>
        <!--/ modernizr script -->
        <!-- END STYLESHEETS -->
    </head>
    <!--/ END Head -->

    <!-- START Body -->
    <body>
        <!-- START Template Header -->
        <header id="header" class="navbar">
            <!-- START navbar header -->
            <div class="navbar-header">
                <!-- Brand -->
                <a class="navbar-brand" href="javascript:void(0);">
                    <span class=""></span>
                    <span class="">Vendas Online</span>
                </a>
                <!--/ Brand -->
            </div>
            <!--/ END navbar header -->

            <!-- START Toolbar -->
            <div class="navbar-toolbar clearfix">
                <!-- START Left nav -->
                <ul class="nav navbar-nav navbar-left">
                    <!-- Sidebar shrink -->
                    <li class="hidden-xs hidden-sm">
                        <a href="javascript:void(0);" class="sidebar-minimize" data-toggle="minimize" title="Minimize sidebar">
                            <span class="meta">
                                <span class="icon"></span>
                            </span>
                        </a>
                    </li>
                    <!--/ Sidebar shrink -->

                    <!-- Offcanvas left: This menu will take position at the top of template header (mobile only). Make sure that only #header have the `position: relative`, or it may cause unwanted behavior -->
                    <li class="navbar-main hidden-lg hidden-md hidden-sm">
                        <a href="javascript:void(0);" data-toggle="sidebar" data-direction="ltr" rel="tooltip" title="Menu sidebar">
                            <span class="meta">
                                <span class="icon"><i class="ico-paragraph-justify3"></i></span>
                            </span>
                        </a>
                    </li>
                    <!--/ Offcanvas left -->


                    <!-- Notification dropdown -->
                    <li class="dropdown custom" id="header-dd-notification">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="meta">
                                <span class="icon"><i class="ico-bell"></i></span>
                                <span class="hasnotification hasnotification-danger"></span>
                            </span>
                        </a>


                        <!-- Dropdown menu -->
                        <div class="dropdown-menu" role="menu">
                            <div class="dropdown-header">
                                <span class="title">Notificações <span class="count"></span></span>
                                <span class="option text-right"><a href="javascript:void(0);"></a></span>
                            </div>
                            <div class="dropdown-body slimscroll">
                                <!-- indicator -->
                                <div class="indicator inline"><span class="spinner spinner16"></span></div>
                                <!--/ indicator -->

                                <!-- Message list -->
                                <div class="media-list">
                                    <a href="javascript:void(0);" class="media read border-dotted">
                                        <span class="media-object pull-left">
                                            <i class="ico-basket2 bgcolor-info"></i>
                                        </span>
                                        <span class="media-body">
                                            <span class="media-text">Duis aute irure dolor in <span class="text-primary semibold">reprehenderit</span> in voluptate.</span>
                                            <!-- meta icon -->
                                            <span class="media-meta pull-right">2d</span>
                                            <!--/ meta icon -->
                                        </span>
                                    </a>


                                    <a href="javascript:void(0);" class="media read border-dotted">
                                        <span class="media-object pull-left">
                                            <i class="ico-alarm2"></i>
                                        </span>
                                        <span class="media-body">
                                            <span class="media-text">Excepteur sint <span class="text-primary semibold">occaecat</span> cupidatat non.</span>
                                            <!-- meta icon -->
                                            <span class="media-meta pull-right">12w</span>
                                            <!--/ meta icon -->
                                        </span>
                                    </a>

                                    <a href="javascript:void(0);" class="media read border-dotted">
                                        <span class="media-object pull-left">
                                            <i class="ico-checkmark3 bgcolor-success"></i>
                                        </span>
                                        <span class="media-body">
                                            <span class="media-text">Lorem ipsum dolor sit amet, <span class="text-primary semibold">consectetur</span> adipisicing elit.</span>
                                            <!-- meta icon -->
                                            <span class="media-meta pull-right">14w</span>
                                            <!--/ meta icon -->
                                        </span>
                                    </a>
                                </div>
                                <!--/ Message list -->
                            </div>
                        </div>
                        <!--/ Dropdown menu -->
                    </li>
                    <!--/ Notification dropdown -->


                </ul>
                <!--/ END Left nav -->


                <!-- START Right nav -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Profile dropdown -->
                    <li class="dropdown profile">
                        <a href="javascript:void(0);" class="dropdown-toggle dropdown-hover" data-toggle="dropdown">
                            <span class="meta">
                                <span class="avatar"><img src="../image/avatar/avatar7.jpg" class="img-circle" alt="" /></span>
                                <span class="text hidden-xs hidden-sm pl5">{{ Auth::user()->name }}</span>
                                <span class="caret"></span>
                            </span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            
                           
                            <li class="divider"></li>
                            @if (Auth::guard())
                            <li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                    {{ csrf_field() }}
                                    <button class="btn btn-default"><span class="icon"><i class="ico-exit"></i></span> Sair</button>
                                </form>
                            </li>
                            @endif
                        </ul>
                    </li>
                    <!-- Profile dropdown -->

                </ul>
                <!--/ END Right nav -->
            </div>
            <!--/ END Toolbar -->
        </header>
        <!--/ END Template Header -->

        <!-- START Template Sidebar (Left) -->
        <aside class="sidebar sidebar-left sidebar-menu">
            <!-- START Sidebar Content -->
            <section class="content slimscroll">
                <h5 class="heading">Menu Principal</h5>
                <!-- START Template Navigation/Menu -->
                <ul class="topmenu topmenu-responsive" data-toggle="menu">
                    <li class="active open">
                        <a href="{{ url('/home') }}" data-target="#dashboard" data-toggle="submenu" data-parent=".topmenu">
                            <span class="figure"><i class="ico-dashboard2"></i></span>
                            <span class="text">Dashboard</span>                            
                        </a>                        
                    </li>
                    
                    <li >
                        <a href="javascript:void(0);" data-toggle="submenu" data-target="#form" data-parent=".topmenu">
                            <span class="figure"><i class="ico-calendar6"></i></span>
                            <span class="text">Produtos</span>
                            <span class="arrow"></span>
                        </a>
                        <!-- START 2nd Level Menu -->
                        <ul id="form" class="submenu collapse ">
                            <li class="submenu-header ellipsis">Produtos</li>
                            <li >
                                <a href="{{ route('produto.create') }}">
                                    <span class="text">Novo Produto</span>
                                </a>
                            </li>
                            <li >
                                <a href="{{ route('produto.index') }}">
                                    <span class="text">Listar Produtos</span>
                                </a>
                            </li>

                        </ul>
                        <!--/ END 2nd Level Menu -->
                    </li>
                    <li >
                        <a href="javascript:void(0);" data-toggle="submenu" data-target="#table" data-parent=".topmenu">
                            <span class="figure"><i class="ico-edit"></i></span>
                            <span class="text">Pedidos</span>
                            <span class="arrow"></span>
                        </a>
                        <!-- START 2nd Level Menu -->
                        <ul id="table" class="submenu collapse ">
                            <li class="submenu-header ellipsis">Pedidos</li>
                            <li >
                                <a href=" {{ url('listar_pedido') }} ">
                                    <span class="text">Visualizar Pedidos</span>
                                </a>
                            </li>
                                                                                    
                        </ul>
                        <!--/ END 2nd Level Menu -->
                    </li>
                    
                    <li >
                        <a href="javascript:void(0);" data-toggle="submenu" data-target="#page" data-parent=".topmenu">
                            <span class="figure"><i class="ico-stack3"></i></span>
                            <span class="text">Mensagens</span>
                            <span class="arrow"></span>
                        </a>
                        <!-- START 2nd Level Menu -->
                        <ul id="page" class="submenu collapse ">
                            <li class="submenu-header ellipsis">Mensagens</li>
                            <li >
                                <a href="{{ route('mensagem.index') }}">
                                    <span class="text">Ver Mensagens</span>
                                    <span class="number">
                                </a>
                            </li>
                        </ul>
                        <!--/ END 2nd Level Menu -->
                    </li>
                    
                    
                    <li >
                        <a href="{{ url('/') }}" data-toggle="submenu" target="_blank" data-target="#theme" data-parent=".topmenu">
                            <span class="figure"><i class="ico-screwdriver"></i></span>
                            <span class="text">Ver Site</span>
                        </a>
                        
                    </li>
                </ul>
                <!--/ END Template Navigation/Menu -->

                <!-- START Sidebar summary -->

                <!--/ END Sidebar summary -->
            </section>
            <!--/ END Sidebar Container -->
        </aside>
        <!--/ END Template Sidebar (Left) -->


        @yield('content')

        <!-- START JAVASCRIPT SECTION (Load javascripts at bottom to reduce load time) -->
        <!-- Application and vendor script : mandatory -->
        <script type="text/javascript" src="{{ url('assets/painel/javascript/vendor.js') }}"></script>
        <script type="text/javascript" src="{{ url('assets/painel/javascript/core.js') }}"></script>
        <script type="text/javascript" src="{{ url('assets/painel/javascript/backend/app.js') }}"></script>
        <!--/ Application and vendor script : mandatory -->

        <!-- Plugins and page level script : optional -->
        <script type="text/javascript" src="{{ url('assets/painel/plugins/selectize/js/selectize.js') }}"></script>
        <script type="text/javascript" src="{{ url('assets/painel/plugins/flot/js/jquery.flot.js') }}"></script>
        <script type="text/javascript" src="{{ url('assets/painel/plugins/flot/js/jquery.flot.resize.js') }}"></script>
        <script type="text/javascript" src="{{ url('assets/painel/plugins/flot/js/jquery.flot.categories.js') }}"></script>
        <script type="text/javascript" src="{{ url('assets/painel/plugins/flot/js/jquery.flot.time.js') }}"></script>
        <script type="text/javascript" src="{{ url('assets/painel/plugins/flot/js/jquery.flot.tooltip.js') }}"></script>
        <script type="text/javascript" src="{{ url('assets/painel/plugins/flot/js/jquery.flot.spline.js') }}"></script>
        <script type="text/javascript" src="{{ url('assets/painel/javascript/backend/pages/dashboard-v1.js') }}"></script>
        <!--/ Plugins and page level script : optional -->
        <!--/ END JAVASCRIPT SECTION -->
    </body>
    <!--/ END Body -->
</html>