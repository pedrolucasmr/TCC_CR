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
$listall="SELECT * FROM processado";
$sql=mysqli_query($conn, $listall);
if (mysqli_num_rows($sql) > 0) {
    while($row = mysqli_fetch_assoc($sql)) {
                echo "<table class='table'/>
            <tr>
            <td><b><center>Nome: </center></b></td>
            <td><b><center>CPF: </center></b></td>
            <td><b><center>CNPJ: </center</b></td>
            <td><b><center>ID: </center></b></td>
            </tr>
            <tr>
            <td>".$row['nome']."</td>
            <td>".$row['cpf']."</td>
            <td>".$row['cnpj']."</td>
            <td>".$row['ID_processado']."</td>
            </tr></table>";
    }
    echo"<a href='../../pdf/listall_processado.php' target='_blank'> Gerar PDF</a>";
} else {
    echo "0 results";
}
?>
    </body></html>