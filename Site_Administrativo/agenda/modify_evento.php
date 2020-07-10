<html>
<?php include "../banco_de_dados/valida_cookies_adm.inc.php" ?>
<head><meta charset="utf-8">
<title>Agenda</title>
<style type="text/css">
.campo{
width:400px;
}
</style>   <link rel="icon" href="../../Cliente-visual/img/balanca.ico"></head>
<body>
<?php

include "../banco_de_dados/conexao_banco_de_dados.inc.php";
$id = $_POST['id'];
if(isset($_POST['done'])){
    $adv = $_POST['adv'];
    $dtevento = $_POST['dtevento'];
    $hora = $_POST['hora'];	 
	$local = $_POST['local'];   
    $conteudo = $_POST['desc'];

    
    if(empty($adv) || empty($dtevento) || empty($conteudo) || empty($local)){
        $erro = "Opa, você deve preencher todos os campos";
    }else{
        
       $sql = mysqli_query($conn,"UPDATE agenda SET adv='$adv', dtevento='$dtevento', conteudo='$conteudo', hora='$hora', local='$local' WHERE id='$id'")or die(mysqli_error());
	   //$linha = mysqli_affected_rows();
            if($sql){
                $erro = "Dados alterados com sucesso!";
                header("location:corpo_agenda.php");
              } else{
                  $erro = "Não foi possivel alterar os dados";
              }
    }
}
$sql = mysqli_query($conn,"SELECT * FROM agenda WHERE id = '$id'");
$res=mysqli_fetch_row($sql);
$adv = $res[1];
$dtevento = $res[2];
$hora = $res[3];
$local = $res[5];
$desc = $res[4];
$id = $res[0];

?>


<form name="form1" action="" method="POST" style="padding-top:40px;">
<?php
if(isset($erro)){
    print '<div style="width:80%; background:#ff6600; color:#fff; padding: 5px 0px 5px 0px; text-align:center; margin: 0 auto;">'.$erro.'</div>';
}
?>
<table border="0" width="80%"  bgcolor="#f0f0f0" style="border:1px solid #ccc; margin:0 auto; position:relative;">
<thead>
<tr>
<th colspan="2">.:: Atualizar Agenda ::.</th>
</tr>
</thead>
<tbody>
<tr>
<td width="14%">Advogado responsável:</td>
<td width="86%"><input type="text" name="adv" value="<?php echo $adv; ?>" class="campo" /></td>
</tr>
<tr>
<td>Data:</td>
<td><input type="=text" name="dtevento" value="<?php echo $dtevento; ?>"  class="campo"/>
dd-mm-aaaa</td>
</tr>
<tr>
<td>Hora:</td>
<td>
   <input type="text" name="hora" value="<?php echo $hora; ?>"  class="campo"/>
   hh:mm</td>
</tr>
<tr>
  <td>Local:</td>
  <td><input name="local" type="text" class="campo" id="local" value="<?php echo $local; ?>"></td>
</tr>
<tr>
<td valign="top">Descrição:</td>
<td><textarea name="desc" rows="8" cols="20" class="campo"><?php echo $desc; ?></textarea><input type="hidden" value="<?php $id = $_POST['id']; ?>"><td></td>
</tr>
<tr>
    <td></td>
    <td><input type="submit" value="Atualizar Agenda" />
    <input type="button" name="button" id="button" onclick="javascript:location.href='corpo_agenda.php';" value="Cancelar" /></td>
<input type="hidden" name="done" value="" /><input name="id" type="hidden" value="<?php echo $id; ?>" />
</form>
<td><?php echo'<form action="deletagenda.php" method="post"><input type="hidden" value="'.$id.'" name="id_delete"><input type="submit" value="Deletar Evento"></form>'; ?></td>
</tbody>
</tr>
    </table></html>


