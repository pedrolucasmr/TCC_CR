<?php
include "conexao_banco_de_dados.inc.php";
$id_adv=$_POST["id_adv"];
$id_cli=$_POST["id_cli"];
$id_processado=$_POST["id_processado"];
$sql="UPDATE processo SET ID_adv='$id_adv',ID_cli='$id_cli',ID_processado='$id_processado' WHERE ID_cli='0'";
$resultado= (mysqli_query ($conn,$sql));
if($resultado){
    echo"Dados armazenados com sucesso";
    header("Location:../cadastros/menu_redirect_adm.html");
}
else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    exit;
}
?>

