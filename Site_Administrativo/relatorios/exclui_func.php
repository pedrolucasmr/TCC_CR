<?php
error_reporting('e_notice');
include "../banco_de_dados/conexao_banco_de_dados.inc.php";
$item=$_POST['item'];
echo"Tem certeza que deseja excluir permanentemente o registro?<br>";
echo'<form method="POST" action=""><input type="hidden" id="registro" name="registro" value="'.$item.'"><input type="submit" name="sim" value="Sim"><input type="submit" name="nao" value="Não"></form>';
$registro=$_POST["registro"];
$sim=$_POST["sim"];
$nao=$_POST["nao"];
if(isset($_POST['sim'])){
    $sql1="SELECT * FROM funcionario WHERE cpf_func='$registro'";
    $sql2="SELECT * FROM secretaria WHERE cpf='$registro'";
    $result1=mysqli_query($conn,$sql1);
    $result2=mysqli_query($conn,$sql2);
    $row1=mysqli_fetch_array($result1);
    $row2=mysqli_fetch_array($result2);
    echo $row[1];
    mysqli_query($conn,"DELETE FROM funcionario WHERE cpf_func='$row1[1]'");
    mysqli_query($conn,"DELETE FROM secretaria WHERE cpf='$row2[1]'");
    header("location:relatorio_funcionario.php");
}
else if(isset($_POST['nao'])){
    header("location:relatorio_funcionario.php");
}
?>
