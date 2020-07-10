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
error_reporting('e_notice');
include "../banco_de_dados/conexao_banco_de_dados.inc.php";
$consulta_value=$_POST["consulta_cli_nome"];
$sql="SELECT * FROM cliente WHERE nome='$consulta_value'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_array($result)){
    echo "<table class='table'>
            <tr>
            <td><b><center>Nome: </center></b></td>
            <td><b><center>CPF: </center></b></td>
            <td><b><center>Endereço: </center</b></td>
            <td><b><center>Email: </center></b></td>
            <td><b><center>Telefone: </center></b></td>
            <td><b><center>ID: </center></b></td>
            </tr>
            <tr>
            <td>".$row['nome']."</td>
            <td>".$row['cpf_cli']."</td>
            <td>".$row['2']."</td>
            <td>".$row['email']."</td>
            <td>".$row['telefone']."</td>
            <td>".$row['ID_cli']."</td>
            </tr></table>";
       
} echo"<h1>Deseja modificar um desses registros?</h1>";
        echo'<form method="post" action="modify_cli_nome.php"><input type="text" name="registro"  placeholder="Digite o CPF do registro"><br><input class="input" type="hidden" value="'.$consulta_value.'" name="consulta" id="consulta"><select name="campo" /><option value="nome">Nome</option><option value="email">Email</option><option value="end">Endereço</option><option value="tel">Telefone</option></select><input type="text" name="mod"><button type="submit">Enviar</button></form>';
        echo"<h1 class='thumbnail'>Deseja APAGAR um desses registros?</h1>";
        echo'<form method="post" action="exclui_cli.php"><input type="text" name="item"  placeholder="Digite o CPF do registro"><input type="submit" value="Enviar"></form>';}else{echo"<br>Não encontrado";}
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