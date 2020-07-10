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
    $consulta_value=$_POST["consulta_processo_cli"];
    $sql="SELECT * FROM processo WHERE ID_cli='$consulta_value'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_array($result)){
            $sql_processado="SELECT nome FROM processado WHERE ID_processado='$row[ID_processado]'";
            $result_processado=mysqli_query($conn,$sql_processado);
            $row_processado=mysqli_fetch_row($result_processado);
            $sql_adv="SELECT * FROM advogado WHERE ID_adv='$row[ID_adv]'";
            $result_adv=mysqli_query($conn,$sql_adv);
            $row_adv=mysqli_fetch_row($result_adv);
            $sql_cli="SELECT * FROM cliente WHERE ID_cli='$row[ID_cli]'";
            $result_cli=mysqli_query($conn,$sql_cli);
            $row_cli=mysqli_fetch_row($result_cli);
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
            <td><b><center>Nome do advogado: </center></b></td>
            <td><b><center>Nome do processado: </center></b></td>
            <td><b><center>Nome do cliente: </center></b></td>
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
            <td>".$row_adv[0]."</td>
            <td>".$row_processado[0]."</td>
            <td>".$row_cli[0]."</td>
            </tr></table>";}
        //Modificação(formulário)
                echo"<h1>Deseja modificar um desses registros?</h1>";
                echo'<form method="post" action="modify_processo.php"><input type="text" name="registro"  placeholder="Digite o ID do processo"><br><select name="campo" /><option value="id_adv">ID do advogado</option><option value="numero_processo">Número do processo</option><option value="data">Data de término</option><option value="descricao">Descricao</option><option value="custo">Custo</option></select><input type="text" name="mod"><button type="submit">Enviar</button></form>';echo"<h1 class='thumbnail'>Deseja APAGAR um desses registros?</h1>";
        echo'<form method="post" action="exclui_processo.php"><input type="text" name="item"  placeholder="Digite o ID de processo do registro"><input type="submit" value="Enviar"></form>';}else{echo"<br>Não encontrado";}
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