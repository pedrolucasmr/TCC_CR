<?php
include "conexao_banco_de_dados.inc.php";
$area=$_POST["area"];
$data_ini=$_POST["data_inicio"];
$data_fim=$_POST["data_fim"];
$custo=$_POST["custo_processo"];
$num_processo=$_POST["num_processo"];
$sql="INSERT INTO processo VALUE ";
$sql .="('$num_processo','$area','$data_ini','$data_fim','$custo','tempo','tempo','0','0','0','0')";
$resultado= (mysqli_query ($conn,$sql));
if($resultado){
    echo"Dados armazenados com sucesso";
    header("Location:../cadastros/cadastro_desc_processo");
}
else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    exit;
}
?>