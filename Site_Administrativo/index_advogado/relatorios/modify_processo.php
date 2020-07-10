<!DOCTYPE html>
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

</head>

<body>
<?php
include "../banco_de_dados/conexao_banco_de_dados.inc.php";
$registro=$_POST['registro'];
$campo=$_POST['campo'];
$mod=$_POST['mod'];
$sql5="SELECT * FROM processo WHERE ID_processo='$registro'";
if($campo=='id_adv'){
$sql1="UPDATE processo SET ID_adv='$mod' WHERE ID_processo='$registro'";
    mysqli_query($conn,$sql1);
    $result=mysqli_query($conn,$sql5);
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_array($result)){
            echo "<table class='table'/>
            <tr>
            <td><b><center>ID do processo: </center></b></td>
            <td><b><center>N° do processo: </center></b></td>
            <td><b><center>Área: </center></b></td>
            <td><b><center>Data de inicio: </center</b></td>
            <td><b><center>Data de término: </center></b></td>
            <td><b><center>Custo: </center></b></td>
            <td><b><center>Descrição: </center></b></td>
            <td><b><center>Objetivo: </center></b></td>
            <td><b><center>ID do advogado: </center></b></td>
            <td><b><center>ID do cliente: </center></b></td>
            <td><b><center>ID do processado: </center></b></td>
            </tr>
            <tr>
            <td>".$row['ID_processo']."</td>
            <td>".$row['numero_processo']."</td>
            <td>".$row['area_processo']."</td>
            <td>".$row['data_inicio']."</td>
            <td>".$row['data_termino']."</td>
            <td>".$row['custo']."</td>
            <td>".$row['descricao']."</td>
            <td>".$row['objetivo']."</td>
            <td>".$row['ID_adv']."</td>
            <td>".$row['ID_cli']."</td>
            <td>".$row['ID_processado']."</td>
            </tr></table>";}
        }
    }
    
    

else if($campo=='numero_processo'){
$sql2="UPDATE processo SET numero_processo='$mod' WHERE ID_processo='$registro'";
    mysqli_query($conn,$sql2);
    $result=mysqli_query($conn,$sql5);
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_array($result)){
        echo "<table class='table'/>
            <tr>
            <td><b><center>ID do processo: </center></b></td>
            <td><b><center>N° do processo: </center></b></td>
            <td><b><center>Área: </center></b></td>
            <td><b><center>Data de inicio: </center</b></td>
            <td><b><center>Data de término: </center></b></td>
            <td><b><center>Custo: </center></b></td>
            <td><b><center>Descrição: </center></b></td>
            <td><b><center>Objetivo: </center></b></td>
            <td><b><center>ID do advogado: </center></b></td>
            <td><b><center>ID do cliente: </center></b></td>
            <td><b><center>ID do processado: </center></b></td>
            <tr>
            <td>".$row['ID_processo']."</td>
            <td>".$row['numero_processo']."</td>
            <td>".$row['area_processo']."</td>
            <td>".$row['data_inicio']."</td>
            <td>".$row['data_termino']."</td>
            <td>".$row['custo']."</td>
            <td>".$row['descricao']."</td>
            <td>".$row['objetivo']."</td>
            <td>".$row['ID_adv']."</td>
            <td>".$row['ID_cli']."</td>
            <td>".$row['ID_processado']."</td>
            </tr></table>";}
        }
    }

else if($campo=='data'){
$sql3="UPDATE processo SET data_termino='$mod' WHERE ID_processo='$registro'";
    mysqli_query($conn,$sql3);
    $result=mysqli_query($conn,$sql5);
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_array($result)){
       echo "<table class='table'/>
            <tr>
            <td><b><center>ID do processo: </center></b></td>
            <td><b><center>N° do processo: </center></b></td>
            <td><b><center>Área: </center></b></td>
            <td><b><center>Data de inicio: </center</b></td>
            <td><b><center>Data de término: </center></b></td>
            <td><b><center>Custo: </center></b></td>
            <td><b><center>Descrição: </center></b></td>
            <td><b><center>Objetivo: </center></b></td>
            <td><b><center>ID do advogado: </center></b></td>
            <td><b><center>ID do cliente: </center></b></td>
            <td><b><center>ID do processado: </center></b></td>
            </tr>
            <tr>
            <td>".$row['ID_processo']."</td>
            <td>".$row['numero_processo']."</td>
            <td>".$row['area_processo']."</td>
            <td>".$row['data_inicio']."</td>
            <td>".$row['data_termino']."</td>
            <td>".$row['custo']."</td>
            <td>".$row['descricao']."</td>
            <td>".$row['objetivo']."</td>
            <td>".$row['ID_adv']."</td>
            <td>".$row['ID_cli']."</td>
            <td>".$row['ID_processado']."</td>
            </tr></table>";}
        }
    }
else if($campo=='descricao'){
$sql6="UPDATE processo SET descricao='$mod' WHERE ID_processo='$registro'";
    mysqli_query($conn,$sql6);
    $result=mysqli_query($conn,$sql5);
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_array($result)){
       echo "<table class='table'/>
            <tr>
            <td><b><center>ID do processo: </center></b></td>
            <td><b><center>N° do processo: </center></b></td>
            <td><b><center>Área: </center></b></td>
            <td><b><center>Data de inicio: </center</b></td>
            <td><b><center>Data de término: </center></b></td>
            <td><b><center>Custo: </center></b></td>
            <td><b><center>Descrição: </center></b></td>
            <td><b><center>Objetivo: </center></b></td>
            <td><b><center>ID do advogado: </center></b></td>
            <td><b><center>ID do cliente: </center></b></td>
            <td><b><center>ID do processado: </center></b></td>
            </tr>
            <tr>
            <td>".$row['ID_processo']."</td>
            <td>".$row['numero_processo']."</td>
            <td>".$row['area_processo']."</td>
            <td>".$row['data_inicio']."</td>
            <td>".$row['data_termino']."</td>
            <td>".$row['custo']."</td>
            <td>".$row['descricao']."</td>
            <td>".$row['objetivo']."</td>
            <td>".$row['ID_adv']."</td>
            <td>".$row['ID_cli']."</td>
            <td>".$row['ID_processado']."</td>
            </tr></table>";}
        }
    }
    
    else if($campo=='custo'){
$sql7="UPDATE processo SET custo='$mod' WHERE ID_processo='$registro'";
    mysqli_query($conn,$sql7);
    $result=mysqli_query($conn,$sql5);
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_array($result)){
       echo "<table class='table'/>
            <tr>
            <td><b><center>ID do processo: </center></b></td>
            <td><b><center>N° do processo: </center></b></td>
            <td><b><center>Área: </center></b></td>
            <td><b><center>Data de inicio: </center</b></td>
            <td><b><center>Data de término: </center></b></td>
            <td><b><center>Custo: </center></b></td>
            <td><b><center>Descrição: </center></b></td>
            <td><b><center>Objetivo: </center></b></td>
            <td><b><center>ID do advogado: </center></b></td>
            <td><b><center>ID do cliente: </center></b></td>
            <td><b><center>ID do processado: </center></b></td>
            </tr>
            <tr>
            <td>".$row['ID_processo']."</td>
            <td>".$row['numero_processo']."</td>
            <td>".$row['area_processo']."</td>
            <td>".$row['data_inicio']."</td>
            <td>".$row['data_termino']."</td>
            <td>".$row['custo']."</td>
            <td>".$row['descricao']."</td>
            <td>".$row['objetivo']."</td>
            <td>".$row['ID_adv']."</td>
            <td>".$row['ID_cli']."</td>
            <td>".$row['ID_processado']."</td>
            </tr></table>";}
        }
    }

    echo"<button class='btn' type='submit'><a href='relatorio_processo.php'>Voltar</a></button>";
    ?>
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