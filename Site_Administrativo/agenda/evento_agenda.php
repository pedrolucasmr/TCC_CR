<?php
//criar a conexão com o banco
include "../banco_de_dados/conexao_banco_de_dados.inc.php";

if(isset($_POST['done'])){
    
    $adv = $_POST['adv'];
    $dtevento = $_POST['dia']."-".$_POST['mes']."-".$_POST['ano'];
	$hora = $_POST['hora'];
	$local = $_POST['local'];
    $conteudo = $_POST['conteudo'];

    
    if(empty($adv) || empty($dtevento) || empty($conteudo) || empty($local)){
        $erro = "Opa, você deve preencher todos os campos";
    }else{        
       $sql = mysqli_query($conn,"INSERT INTO `agenda`(`adv`, `dtevento`,`hora`, `local`, `conteudo`) VALUES ('$adv', '$dtevento','$hora', '$local', '$conteudo')") or die(mysqli_error());
            if($sql){
                $erro = "Dados cadastrados com sucesso!";
              } else{
                  $erro = "Não foi possivel cadastrar os dados";
              }
    }
}
?>

<html>
<head><meta charset="utf-8">
<title>Agenda de Compromissos</title>
<style type="text/css">
.campo{
width:400px;
}
    .admin{
           margin-left:50px;
       }
</style>
</head>
<body>
<form name="form1" action="" method="POST" style="padding-top:40px;" class="admin">
<?php
if(isset($erro)){
    print '<div style="width:80%; background:#ff6600; color:#fff; padding: 5px 0px 5px 0px; text-align:center; margin: 0 auto;">'.$erro.'</div>';
}
?>
<table border="0" width="80%"  bgcolor="#f0f0f0" style="border:1px solid #ccc; margin:0 auto; position:relative;">
<thead>
<tr>
<th colspan="2">.:: Inserir Evento no Calendário ::.</th>
</tr>
</thead>
<tbody>
<tr>
<td width="20%">Advogado responsável:</td>
<td width="auto"><input type="text" name="adv"  class="campo" id="evento" /></td>
</tr>
<tr>
<td>Data:</td>
<td><select name="dia">
<?php
for($i=1;$i<=31;$i++){
echo"<option value='$i'>$i</option>";
}  
?>     
</select>
  <select name="mes" >
 <?php
for($i=1;$i<=12;$i++){
echo"<option value='$i'>$i</option>";
}  
?> 
  </select>
  <select name="ano" >
<?php
$ano=date('Y');
for($i=$ano;$i<=$ano+5;$i++){
echo"<option value='$i'>$i</option>";
}  
?>  
        
  </select>  </td>
</tr>

<tr>
  <td>Hora:</td>
  <td><input name="hora" type="text" class="campo" id="hora">
    (hh:mm)</td>
</tr>
<tr>
<td>Local e/ou endereço:</td>
<td><input name="local" type="text" class="campo" id="local"></td>
</tr>
<tr>
<td valign="top">Descricão:</td>
<td><textarea name="conteudo" rows="8" class="campo" >
</textarea></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="Cadastrar Evento" /><input type="hidden" name="done" value="" /></td>
</tr>
</tbody>
</table>
</form>
