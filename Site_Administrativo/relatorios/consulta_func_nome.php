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
    $consulta_value=$_POST["consulta_func"];
    //Funcionário
    echo"<h1>Geral: <br></h1>";
    $sql="SELECT * FROM funcionario WHERE nome='$consulta_value'";
    $result1=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result1)>0){
        while($row=mysqli_fetch_array($result1)){
        echo "<table class='table'/>
            <tr>
            <td><b><center>Nome: </center></b></td>
            <td><b><center>CPF: </center></b></td>
            <td><b><center>Email: </center</b></td>
            <td><b><center>Telefone: </center></b></td>
            <td><b><center>Cargo: </center></b></td>
            <td><b><center>Salário: </center></b></td>
            </tr>
            <tr>
            <td>".$row['nome']."</td>
            <td>".$row['cpf_func']."</td>
            <td>".$row['email']."</td>
            <td>".$row['telefone']."</td>
            <td>".$row['cargo']."</td>
            <td>".$row['salario']."</td>
            </tr></table>";
            
    }echo"<h1>Deseja modificar um dos registros de funcionário?</h1>";
            echo'<form method="post" action="modify_func.php"><input type="text" name="registro"  placeholder="Digite o CPF do registro"><br><select name="campo" /><option value="nome">Nome</option><option value="email">Email</option><option value="tel">Telefone</option></select><input type="text" name="mod"><button type="submit">Enviar</button></form>';
     echo"<h1 class='thumbnail'>Deseja APAGAR um desses registros?</h1>";
        echo'<form method="post" action="exclui_func.php"><input type="text" name="item"  placeholder="Digite o CPF do registro"><input type="submit" value="Enviar"></form>';}else{echo"<br>Nenhum funcionário encontrado";}
     echo"<h1>Secretárias: <br></h1>";
    $sql1="SELECT * FROM secretaria WHERE nome='$consulta_value'";
    $result2=mysqli_query($conn,$sql1);
    if(mysqli_num_rows($result2)>0){
        while($row=mysqli_fetch_array($result2)){
        echo "<table class='table'/>
            <tr>
            <td><b><center>Nome: </center></b></td>
            <td><b><center>CPF: </center></b></td>
            <td><b><center>Email: </center</b></td>
            <td><b><center>Telefone: </center></b></td>
            <td><b><center>Cargo: </center></b></td>
            <td><b><center>Salário: </center></b></td>
            <td><b><center>Senha: </center></b></td>
            </tr>
            <tr>
            <td>".$row['nome']."</td>
            <td>".$row['cpf']."</td>
            <td>".$row['email']."</td>
            <td>".$row['telefone']."</td>
            <td>".$row['cargo']."</td>
            <td>".$row['salario']."</td>
            <td>".$row['senha']."</td>
            </tr></table>";
            
    }echo"<h1>Deseja modificar um dos registros de funcionário?</h1>";
            echo'<form method="post" action="modify_secre.php"><input type="text" name="registro"  placeholder="Digite o CPF do registro"><br><select name="campo" /><option value="nome">Nome</option><option value="email">Email</option><option value="tel">Telefone</option></select><input type="text" name="mod"><button type="submit">Enviar</button></form>';
     echo"<h1 class='thumbnail'>Deseja APAGAR um desses registros?</h1>";
        echo'<form method="post" action="exclui_func.php"><input type="text" name="item"  placeholder="Digite o CPF do registro"><input type="submit" value="Enviar"></form>';}else{echo"<br>Nenhum funcionário encontrado";}
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