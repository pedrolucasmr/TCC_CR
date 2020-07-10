<?php
include "../banco_de_dados/conexao_banco_de_dados.inc.php";
include "../pdf/mpdf-5.7-php7-master/mpdf.php";
$listall="SELECT * FROM processo";
$sql=mysqli_query($conn, $listall);
$mpdf= new mPDF();
$mpdf->SetDisplayMode("fullpage");
$mpdf->WriteHTML("<h1>Relatório de todos os processos</h1><hr/>");
if (mysqli_num_rows($sql) > 0) {
    while($row = mysqli_fetch_assoc($sql)) {
       $mpdf->WriteHTML("<fieldset><table border='1' width='95%'><tr><td width='25%'>Número do processo:</td><td width='15%'>Área:</td><td width='30%'>Data de término:</td><td width='40%'>ID(adv):</td><td width='40%'>ID(cli):</td><td width='40%'>ID(pro):</td></tr><tr><td>".$row['numero_processo']."</td><td>".$row['area_processo']."</td><td>".$row["data_termino"]."</td><td>".$row['ID_adv']."</td><td>".$row['ID_cli']."</td><td>".$row['ID_processo']."</td></tr></table></fieldset>");}
$mpdf->Output();
}?>