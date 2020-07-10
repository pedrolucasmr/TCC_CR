<?php
include "../banco_de_dados/conexao_banco_de_dados.inc.php";
include "../pdf/mpdf-5.7-php7-master/mpdf.php";
$listall="SELECT * FROM funcionario";
$sql=mysqli_query($conn, $listall);
$listall1="SELECT * FROM secretaria";
$sql1=mysqli_query($conn, $listall1);
$mpdf= new mPDF();
$mpdf->SetDisplayMode("fullpage");
$mpdf->WriteHTML("<h1>Relatório de todos os funcionários</h1><hr/>");
if (mysqli_num_rows($sql) > 0) {
    while($row = mysqli_fetch_assoc($sql)) {
       $mpdf->WriteHTML("<fieldset><table border='1' width='95%'><tr><td width='30%'>Nome:</td><td width='20%'>Email:</td><td>CPF:</td><td>Telefone:</td><td width='20%'>Cargo:</td><td>Salário:</td></tr><tr><td>".$row['nome']."</td><td>".$row['email']."</td><td>".$row["cpf_func"]."</td><td>".$row['telefone']."</td><td>".$row['cargo']."</td><td>".$row['salario']."</td></tr></table></fieldset>");}
if (mysqli_num_rows($sql1) > 0) {
    while($row1 = mysqli_fetch_assoc($sql1)) {
       $mpdf->WriteHTML("<fieldset><table border='1' width='95%'><tr><td width='30%'>Nome:</td><td width='20%'>Email:</td><td>CPF:</td><td>Telefone:</td><td width='20%'>Cargo:</td><td>Salário:</td></tr><tr><td>".$row1['nome']."</td><td>".$row1['email']."</td><td>".$row1["cpf"]."</td><td>".$row1['telefone']."</td><td>".$row1['cargo']."</td><td>".$row1['salario']."</td></tr></table></fieldset>");}
$mpdf->Output();
}}?>