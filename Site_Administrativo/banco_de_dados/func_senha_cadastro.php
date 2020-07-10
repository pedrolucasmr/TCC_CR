<?php
include "conexao_banco_de_dados.inc.php";
$senha=$_POST["password_func"];
    $sql="UPDATE secretaria SET senha='$senha' WHERE senha='00000000'";
    $resultado= (mysqli_query ($conn,$sql));
if($resultado){
    echo"Dados armazenados com sucesso";
    header("Location:../cadastros/menu_redirect_adm.html");
}
else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    exit;
}