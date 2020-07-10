
<?php
include "../banco_de_dados/conexao_banco_de_dados.inc.php";
include "../pdf/mpdf-5.7-php7-master/mpdf.php";
$listall="SELECT * FROM advogado";
$sql=mysqli_query($conn, $listall);
$mpdf= new mPDF();
$mpdf->SetDisplayMode("fullpage");
$mpdf->WriteHTML("<h1>Relatório de todos os advogados</h1><hr/>");
if (mysqli_num_rows($sql) > 0) {
    while($row = mysqli_fetch_assoc($sql)) {
       $mpdf->WriteHTML("<fieldset><table border='1' width='95%'><tr><td width='40%'>Nome:</td><td width='40%'>Email:</td><td width='40%'>CPF:</td><td width='40%'>Telefone:</td><td width='40%'>ID:</td></tr><tr><td>".$row['nome']."</td><td>".$row['email']."</td><td>".$row["cpf_adv"]."</td><td>".$row['telefone']."</td><td>".$row['ID_adv']."</tr></table></fieldset>");}
$mpdf->Output();
}?>