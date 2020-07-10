<?php
include "conexao_banco_de_dados.inc.php";
$descricao=$_POST["desc_processo"];
$objetivo=$_POST["objetivo_processo"];
$sql="UPDATE processo SET descricao='$descricao',objetivo='$objetivo' WHERE descricao='tempo'";
$resultado= (mysqli_query ($conn,$sql));
if($resultado){
    echo"Dados armazenados com sucesso";
    header("Location:../cadastros/cadastro_ids_processo.html");
}
else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    exit;
}
?>

