<?php
    include "conexao_banco_de_dados.inc.php";
$nome=$_POST["name_adv"];
$cpf=$_POST["cpf_adv"];
$telefone=$_POST["tel_adv"];
$email_adv=$_POST["email_adv"];
$senha=$_POST["password_adv"];
$sql="INSERT INTO advogado VALUES ";
$sql .="('$nome','$cpf','$email_adv','$telefone','$senha','0','2')";
$resultado= (mysqli_query ($conn,$sql));
if($resultado){
    echo"Dados armazenados com sucesso";
    header("Location:../cadastros/menu_redirect_adm.html");
}
else{
    echo "Error: \n" . $sql . "<br>" . mysqli_error($conn);
    exit;
}
?>