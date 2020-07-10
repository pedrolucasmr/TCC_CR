<?php
include "conexao_banco_de_dados.inc.php";
$nome=$_POST["name_processado"];
$tipo=$_POST["tipo_processado"];
$cpf=$_POST["cpf_processado"];
$cnpj=$_POST["cnpj_processado"];
if($tipo=="pessoa_fisica"){
    $sql="INSERT INTO processado VALUES ";
    $sql .="('$nome','0','1','$cpf','$cnpj','0')";
    $resultado= (mysqli_query ($conn,$sql));
if($resultado){
    echo"Dados armazenados com sucesso";
    header("Location:../cadastros/menu_redirect_adv.html");
}
else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    exit;
}}
else{
    $sql="INSERT INTO processado VALUES ";
    $sql .="('$nome','1','0','$cpf','$cnpj','0')";
    $resultado= (mysqli_query ($conn,$sql));
if($resultado){
    echo"Dados armazenados com sucesso";
    header("Location:../cadastros/menu_redirect_adv.html");
}
else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    exit;
}}
?>
