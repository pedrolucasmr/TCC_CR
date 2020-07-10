<?php
include "conexao_banco_de_dados.inc.php";
$nome=$_POST['name_adm'];
$cpf=$_POST['cpf_adm'];
$tel=$_POST['tel_adm'];
$email=$_POST['email_adm'];
$senha=$_POST['password_adm'];
$sql="INSERT INTO admnistrador VALUES ";
$sql .="('$nome','$cpf','$email','$senha','$tel','1')";
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