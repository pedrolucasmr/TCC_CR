<?php
include "../banco_de_dados/conexao_banco_de_dados.inc.php";
$id= $_POST['id_delete'];
$linha= mysqli_fetch_row(mysqli_query($conn,"SELECT * FROM agenda WHERE id='$id'"));
echo $linha[0];
$sql=mysqli_query($conn,"DELETE FROM agenda WHERE id ='$linha[0]'");
if($sql){
    echo'<script>alert("Evento deletado com sucesso");window.location.href = "corpo_agenda.php";</script>' ;
}
else{
    echo'<script>alert("Falha ao deletar evento, tente novamente");window.location.href = "corpo_agenda.php";</script>' ;
}
?>