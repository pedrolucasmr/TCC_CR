<?php
    include "conexao_banco_de_dados.inc.php";
$nome=$_POST["name_cli"];
$cpf=$_POST["cpf_cli"];
$email=$_POST["email_cli"];
$telefone=$_POST["tel_cli"];
$endereco=$_POST["endereco_cli"];
$sql="INSERT INTO cliente VALUES ";
$sql .="('$nome','$cpf','$endereco','$email','$telefone','0')";
$resultado= (mysqli_query ($conn,$sql));
if($resultado){
    echo"\nDados armazenados com sucesso";
    header("Location:../cadastros/menu_redirect_adm.html");
}
else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    exit;
}
?>