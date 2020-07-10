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
    $sql="SELECT * FROM admnistrador WHERE cpf='$registro'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);
    echo $row[1];
    mysqli_query($conn,"DELETE FROM admnistrador WHERE cpf='$row[1]'");
    header("location:relatorio_adm.php");
}
else if(isset($_POST['nao'])){
    header("location:relatorio_adm.php");
}
?>
