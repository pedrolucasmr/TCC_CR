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
    <link href="../../css/bootstrap.css" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="../../css/plugins/morris.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="../../font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<?php
include "../../banco_de_dados/conexao_banco_de_dados.inc.php";
$listall="SELECT * FROM funcionario";
$listall1="SELECT * FROM secretaria";
$sql=mysqli_query($conn, $listall);
$sql1=mysqli_query($conn, $listall1);
if (mysqli_num_rows($sql) > 0) {
    while($row = mysqli_fetch_assoc($sql)) {
                echo "<table class='table'/>
            <tr>
            <td><b><center>Nome: </center></b></td>
            <td><b><center>CPF: </center></b></td>
            <td><b><center>Email: </center</b></td>
            <td><b><center>Salário: </center></b></td>
            <td><b><center>Telefone: </center></b></td>
            <td><b><center>Cargo: </center></b></td>
            </tr>
            <tr>
            <td>".$row['nome']."</td>
            <td>".$row['cpf_func']."</td>
            <td>".$row['email']."</td>
            <td>".$row['salario']."</td>
            <td>".$row['telefone']."</td>
            <td>".$row['cargo']."</td>
            </tr></table>";
    }
    if (mysqli_num_rows($sql1) > 0) {
    while($row1 = mysqli_fetch_assoc($sql1)) {
                echo "<table class='table'/>
            <tr>
            <td><b><center>Nome: </center></b></td>
            <td><b><center>CPF: </center></b></td>
            <td><b><center>Email: </center</b></td>
            <td><b><center>Salário: </center></b></td>
            <td><b><center>Telefone: </center></b></td>
            <td><b><center>Cargo: </center></b></td>
            </tr>
            <tr>
            <td>".$row1['nome']."</td>
            <td>".$row1['cpf']."</td>
            <td>".$row1['email']."</td>
            <td>".$row1['salario']."</td>
            <td>".$row1['telefone']."</td>
            <td>".$row1['cargo']."</td>
            </tr></table>";
    }
    echo"<a href='../../pdf/listall_func.php' target='_blank'> Gerar PDF</a>";
}} else {
    echo "0 results";
}
?>
    </body></html>