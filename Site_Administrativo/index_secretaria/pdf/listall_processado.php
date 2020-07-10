<?php
include "../banco_de_dados/conexao_banco_de_dados.inc.php";
include "../pdf/mpdf-5.7-php7-master/mpdf.php";
$listall="SELECT * FROM processado";
$sql=mysqli_query($conn, $listall);
$mpdf= new mPDF();
$mpdf->SetDisplayMode("fullpage");
$mpdf->WriteHTML("<h1>Relatório de todos os processados</h1><hr/>");
if (mysqli_num_rows($sql) > 0) {
    while($row = mysqli_fetch_assoc($sql)) {
       $mpdf->WriteHTML("<fieldset><table border='1' width='95%'><tr><td width='40%'>Nome:</td><td width='40%'>CPF:</td><td width='40%'>CNPJ:</td><td width='40%'>ID:</td></tr><tr><td>".$row['nome']."</td><td>".$row['cpf']."</td><td>".$row["cnpj"]."</td><td>".$row['ID_processado']."</td></tr></table></fieldset>");}
$mpdf->Output();
}?>