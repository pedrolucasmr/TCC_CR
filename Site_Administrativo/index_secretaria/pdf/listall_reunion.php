<?php
include "../banco_de_dados/conexao_banco_de_dados.inc.php";
include "../pdf/mpdf-5.7-php7-master/mpdf.php";
$listall="SELECT * FROM reunion";
$sql=mysqli_query($conn, $listall);
$mpdf= new mPDF();
$mpdf->SetDisplayMode("fullpage");
$mpdf->WriteHTML("<h1>Relatório de todas as reuniões</h1><hr/>");
if (mysqli_num_rows($sql) > 0) {
    while($row = mysqli_fetch_assoc($sql)) {
       $mpdf->WriteHTML("<fieldset><table border='1' width='95%'><tr><td width='40%'>Data da reunião:</td><td width='40%'>Advogado:</td><td width='40%'>Cliente:</td><td width='40%'>ID da reunião:</td></tr><tr><td>".$row['data_reuniao']."</td><td>".$row['advogado']."</td><td>".$row["cliente"]."</td><td>".$row['ID_reunion']."</td></tr></table></fieldset>");}
$mpdf->Output();
}?>