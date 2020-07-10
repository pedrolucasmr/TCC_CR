<!DOCTYPE html>
<?php include "../banco_de_dados/valida_cookies_secre.inc.php" ?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LOPES ADVOCACIA</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<link rel="icon" href="../../../Cliente-visual/img/balanca.ico">
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
                <a class="navbar-brand" href="../index_secre.php">Lopes advocacia</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Logado como secretária <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="../logout.php"><i class="fa fa-fw fa-power-off"></i> Sair</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="../index_secre.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="../agenda/corpo_agenda.php"><i class="fa fa-fw fa-table"></i> Agenda</a>
                    </li>
                    <li>
                      <a href="javascript:;" data-toggle="collapse" data-target="#cli_options"><i class="fa fa-fw fa-arrows-v"></i>Clientes <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="cli_options" class="collapse">
                            <li>
                                <a href="relatorio_cliente.php">Listar Clientes</a>
                                <a href="../cadastros/cadastro_cli.html">Cadastrar novo cliente</a>
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
                            Relatórios<small> Clientes</small>
                        </h1>
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
                                        <div>Listar todos</div>
                                    </div>
                                </div>
                            </div>
                            <a href="listall/listall_cli.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Listar</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>            
            </div>
                       <!-- /.row -->
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-9 text-left">                    </div>
                                        <div><h2>Faça uma consulta por nome: <br></h2></div>
                                    </div>
                                    <form method="post" action="consulta_cli_nome.php">
                                    <div class="cols-md-12">
								
									<br><input type="text" class="form-control" name="consulta_cli_nome" id="consulta_cli_nome"  placeholder="Digite o nome"/>
								
                                  
                                    </div>
						</div>
                                </div>
                            <button type=submit class="btn btn-primary btn-lg btn-block login-button">Consultar</button>  </form>
                        </div>
                           <div class="col-lg-6 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-9 text-left">                    </div>
                                        <div><h2>Faça uma consulta por ID: <br></h2></div>
                                    </div>
                                    <form method="post" action="consulta_cli_id.php">
                                    <div class="cols-md-12">
								
									<br><input type="text" class="form-control" name="consulta_cli_id" id="consulta_cli_id"  placeholder="Digite o nome"/>
								
                                  
                                    </div>
						</div>
                                </div>
                            <button type=submit class="btn btn-primary btn-lg btn-block login-button">Consultar</button>  </form>
                        </div>

                            
            </div></div>
                    
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../js/plugins/morris/raphael.js"></script>
    <script src="../js/plugins/morris/morris.js"></script>
    <script src="../js/plugins/morris/morris-data.js"></script>

</body>

</html>