<!DOCTYPE html>
<?php 
include_once "banco_de_dados/valida_cookies_adm.inc.php";
?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LOPES ADVOCACIA</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<link rel="icon" href="../Cliente-visual/img/balanca.ico">
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand">Lopes advocacia</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="cadastros/reunion.html">Nova reunião</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Logado como administrador <b class="caret"></b></a>
                    <ul class="dropdown-menu">

                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Sair</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index_adm.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                   <li>
                      <a href="javascript:;" data-toggle="collapse" data-target="#adm_options"><i class="fa fa-fw fa-arrows-v"></i>Administradores <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="adm_options" class="collapse">
                            <li>
                                <a href="relatorios/relatorio_adm.php">Listar Administradores</a>
                                <a href="cadastros/cadastro_adm.html">Cadastrar novo admnistrador</a>
                    </li>
                            </ul>
                    </li>
                    <li>
                        <a href="agenda/corpo_agenda.php"><i class="fa fa-fw fa-table"></i> Agenda</a>
                    </li>
                    <li>
                      <a href="javascript:;" data-toggle="collapse" data-target="#adv_options"><i class="fa fa-fw fa-arrows-v"></i>Advogados <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="adv_options" class="collapse">
                            <li>
                                <a href="relatorios/relatorio_advogado.php">Listar Advogados</a>
                                <a href="cadastros/cadastro_adv.html">Cadastrar novo advogado</a>
                    </li>
                            </ul>
                    </li>
                       <li>
                      <a href="javascript:;" data-toggle="collapse" data-target="#proc_options"><i class="fa fa-fw fa-arrows-v"></i>Processos <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="proc_options" class="collapse">
                            <li>
                                <a href="relatorios/relatorio_processo.php">Listar Processos</a>
                                <a href="cadastros/cadastro_processo.html">Cadastrar novo processo</a>
                    </li>
                            </ul>
                    </li> 
                    <li>
                      <a href="javascript:;" data-toggle="collapse" data-target="#cli_options"><i class="fa fa-fw fa-arrows-v"></i>Clientes <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="cli_options" class="collapse">
                            <li>
                                <a href="relatorios/relatorio_cliente.php">Listar Clientes</a>
                                <a href="cadastros/cadastro_cli.html">Cadastrar novo cliente</a>
                    </li>
                            </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#func_option"><i class="fa fa-fw fa-arrows-v"></i> Funcionários <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="func_option" class="collapse">
                            <li>
                                <a href="relatorios/relatorio_funcionario.php">Listar Funcionários</a>
                            </li>
                            <li>
                                <a href="cadastros/cadastro_func.html">Cadastrar novo funcionário</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Olá! <small>O que gostaria de fazer?</small>
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div>Relatórios de Advogados</div>
                                    </div>
                                </div>
                            </div>
                            <a href="relatorios/relatorio_advogado.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Ver</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div>Relatórios de processos</div>
                                    </div>
                                </div>
                            </div>
                            <a href="relatorios/relatorio_processo.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Ver</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div>Relatórios de Clientes</div>
                                    </div>
                                </div>
                            </div>
                            <a href="relatorios/relatorio_cliente.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Ver</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div>Relatórios de Funcionários</div>
                                    </div>
                                </div>
                            </div>
                            <a href="relatorios/relatorio_funcionario.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Ver</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                     <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div>Cadastrar um novo advogado</div>
                                    </div>
                                </div>
                            </div>
                            <a href="cadastros/cadastro_adv.html">
                                <div class="panel-footer">
                                    <span class="pull-left">Cadastrar</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                   <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div>Cadastrar novo processo</div>
                                    </div>
                                </div>
                            </div>
                            <a href="cadastros/cadastro_processo.html">
                                <div class="panel-footer">
                                    <span class="pull-left">Cadastrar</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                     <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div>Cadastrar um novo Cliente</div>
                                    </div>
                                </div>
                            </div>
                            <a href="cadastros/cadastro_cli.html">
                                <div class="panel-footer">
                                    <span class="pull-left">Cadastrar</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div>Cadastrar um novo Funcionário</div>
                                    </div>
                                </div>
                            </div>
                            <a href="cadastros/cadastro_func.html">
                                <div class="panel-footer">
                                    <span class="pull-left">Cadastrar</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                    <div class="col-lg-4">
                    </div>
                    <div class="col-lg-4">
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.js"></script>
    <script src="js/plugins/morris/morris.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
