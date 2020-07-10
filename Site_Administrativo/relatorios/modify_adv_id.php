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
$consulta_value=$_POST['consulta'];
$registro=$_POST['registro'];
$campo=$_POST['campo'];
$mod=$_POST['mod'];
$sql5="SELECT * FROM advogado WHERE ID_adv='$consulta_value'";
$result_row=mysqli_query($conn,$sql5);
$row_row=mysqli_fetch_array($result_row);
$sql4="SELECT * FROM advogado WHERE cpf_adv='$registro'";
$sql5="SELECT * FROM advogado WHERE cpf_adv='$registro'";
if($campo=='nome'){
$sql1="UPDATE advogado SET nome='$mod' WHERE cpf_adv='$registro'";
    mysqli_query($conn,$sql1);
    $result=mysqli_query($conn,$sql5);
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_array($result)){
            echo "<table class='table'>
            <tr>
            <td><b><center>Nome: </center></b></td>
            <td><b><center>CPF: </center></b></td>
            <td><b><center>Email: </center</b></td>
            <td><b><center>Senha: </center></b></td>
            <td><b><center>Telefone: </center></b></td>
            <td><b><center>ID: </center></b></td>
            </tr>
            <tr>
            <td>".$row['nome']."</td>
            <td>".$row['cpf_adv']."</td>
            <td>".$row['email']."</td>
            <td>".$row['senha']."</td>
            <td>".$row['telefone']."</td>
            <td>".$row['ID_adv']."</td>
            </tr></table>";
        }
    }
    
    
}
else if($campo=='email'){
$sql2="UPDATE advogado SET email='$mod' WHERE cpf_adv='$registro'";
    mysqli_query($conn,$sql2);
    $result=mysqli_query($conn,$sql4);
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_array($result)){
            echo "<table class='table'>
            <tr>
            <td><b><center>Nome: </center></b></td>
            <td><b><center>CPF: </center></b></td>
            <td><b><center>Email: </center</b></td>
            <td><b><center>Senha: </center></b></td>
            <td><b><center>Telefone: </center></b></td>
            <td><b><center>ID: </center></b></td>
            </tr>
            <tr>
            <td>".$row['nome']."</td>
            <td>".$row['cpf_adv']."</td>
            <td>".$row['email']."</td>
            <td>".$row['senha']."</td>
            <td>".$row['telefone']."</td>
            <td>".$row['ID_adv']."</td>
            </tr></table>";
        }
    }
}
else if($campo=='tel'){
$sql3="UPDATE advogado SET telefone='$mod' WHERE cpf_adv='$registro'";
    mysqli_query($conn,$sql3);
    $result=mysqli_query($conn,$sql4);
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_array($result)){
            echo "<table class='table'>
            <tr>
            <td><b><center>Nome: </center></b></td>
            <td><b><center>CPF: </center></b></td>
            <td><b><center>Email: </center</b></td>
            <td><b><center>Senha: </center></b></td>
            <td><b><center>Telefone: </center></b></td>
            <td><b><center>ID: </center></b></td>
            </tr>
            <tr>
            <td>".$row['nome']."</td>
            <td>".$row['cpf_adv']."</td>
            <td>".$row['email']."</td>
            <td>".$row['senha']."</td>
            <td>".$row['telefone']."</td>
            <td>".$row['ID_adv']."</td>
            </tr></table>";
        }
    }
    
}
    echo"<button class='btn' type='submit'><a href='relatorio_advogado.php'>Voltar</a></button>";
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