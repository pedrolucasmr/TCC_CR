<?php
include "conexao_banco_de_dados.inc.php";
$data=$_POST['data_reunion'];
$adv=$_POST['name_adv'];
$cli=$_POST['name_cli'];
$sql="INSERT INTO reunion VALUES ";
$sql .="('$data','$adv','$cli','0')";
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