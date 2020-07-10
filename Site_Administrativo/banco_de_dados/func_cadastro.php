<?php
include "conexao_banco_de_dados.inc.php";
$nome=$_POST["name_func"];
$cpf=$_POST["cpf_func"];
$telefone=$_POST["tel_func"];
$salario=$_POST["sal_func"];
$email=$_POST["email_func"];
$cargo=$_POST["cargo_func"];
if($cargo=="secretaria"){
    $sql="INSERT INTO secretaria VALUES ";
    $sql .="('$nome','$cpf','$cargo','$email','$telefone','$salario','00000000','3')";
    $resultado= (mysqli_query ($conn,$sql));
if($resultado){
    echo"Dados armazenados com sucesso";
     header("Location:../cadastros/cadastro_func_senha.html");
}
else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    exit;
}}
else{
       $sql="INSERT INTO funcionario VALUES ";
    $sql .="('$nome','$cpf','$cargo','$email','$telefone','$salario')";
    $resultado= (mysqli_query ($conn,$sql));
if($resultado){
    echo"Dados armazenados com sucesso";
    header("Location:../cadastros/menu_redirect_adm.html");
}
else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    exit;
}}
?>
