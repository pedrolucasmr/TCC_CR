<?php
include "../banco_de_dados/conexao_banco_de_dados.inc.php";
include "../pdf/mpdf-5.7-php7-master/mpdf.php";
echo"<form action='' method='post'><h1>Selecione o cargo do qual deseja o relatório:</h1><br><form><select name='cargo' id='cargo'><option value='secretaria'>Secretária</option><option value='limpeza'>Funcionário da limpeza</option><option value='ti'>Funcionário do TI</option></select><input type='submit' value='Enviar'></form>";
$cargo=$_POST['cargo'];
if(isset($cargo)){
if($cargo=='secretaria'){
    $mpdf= new mPDF();
    $mpdf->SetDisplayMode("fullpage");
    $mpdf->WriteHTML("<h1>Relatório de funcionários por cargo</h1><hr/>");
    $listall1="SELECT * FROM secretaria";
    $sql1=mysqli_query($conn, $listall1);
    if (mysqli_num_rows($sql1) > 0) {
        while($row1 = mysqli_fetch_assoc($sql1)) {
            $mpdf->WriteHTML("<fieldset><table border='1' width='95%'><tr><td width='30%'>Nome:</td><td width='20%'>Email:</td><td>CPF:</td><td>Telefone:</td><td width='20%'>Cargo:</td><td>Salário:</td></tr><tr><td>".$row1['nome']."</td><td>".$row1['email']."</td><td>".$row1["cpf"]."</td><td>".$row1['telefone']."</td><td>".$row1['cargo']."</td><td>".$row1['salario']."</td></tr></table></fieldset>");}}
    $mpdf->Output();}
else{
    $listall="SELECT * FROM funcionario WHERE cargo='".$cargo."'";
    $sql=mysqli_query($conn, $listall);
    $mpdf= new mPDF();
    $mpdf->SetDisplayMode("fullpage");
    $mpdf->WriteHTML("<h1>Relatório de funcionários por cargo</h1><hr/>");
    if (mysqli_num_rows($sql) > 0) {
        while($row = mysqli_fetch_assoc($sql)) {
            $mpdf->WriteHTML("<fieldset><table border='1' width='95%'><tr><td width='30%'>Nome:</td><td width='20%'>Email:</td><td>CPF:</td><td>Telefone:</td><td width='20%'>Cargo:</td><td>Salário:</td></tr><tr><td>".$row['nome']."</td><td>".$row['email']."</td><td>".$row["cpf_func"]."</td><td>".$row['telefone']."</td><td>".$row['cargo']."</td><td>".$row['salario']."</td></tr></table></fieldset>");}
    $mpdf->Output();}
        else{echo"<h1>Nenhum funcionário cadastrado neste cargo</h1>";}

}}?>