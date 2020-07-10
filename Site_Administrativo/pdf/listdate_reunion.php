<?php
include "../banco_de_dados/conexao_banco_de_dados.inc.php";
include "../pdf/mpdf-5.7-php7-master/mpdf.php";
echo"<form action='' method='post'><h1>Insira a data desejada:</h1><br><form><input type='date' name='data' id='data'><input type='submit' value='Enviar'></form>";
$data=$_POST['data'];
if(isset($data)){
    $mpdf= new mPDF();
    $mpdf->SetDisplayMode("fullpage");
    $mpdf->WriteHTML("<h1>Relatório de reunião por data</h1><hr/>");
    $listall="SELECT * FROM reunion WHERE data_reuniao='$data'";
    $sql=mysqli_query($conn, $listall);
    if (mysqli_num_rows($sql) > 0) {
        while($row = mysqli_fetch_assoc($sql)) {
            $mpdf->WriteHTML("<fieldset><table border='1' width='95%'><tr><td width='30%'>Data da reunião:</td><td width='20%'>Advogado:</td><td>Cliente:</td><td>ID da reunião:</td></tr><tr><td>".$row['data_reuniao']."</td><td>".$row['advogado']."</td><td>".$row["cliente"]."</td><td>".$row['ID_reunion']."</td></tr></table></fieldset>");
    $mpdf->Output();}}
else
{echo"Nenhum registro encontrado";}}
?>