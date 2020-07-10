<?php

include "conexao_banco_de_dados.inc.php";
$email=$_POST['email'];
$destinatario = "cadu019@hotmail.com";
$nome=$_POST['nome'];
$assunto="Novo contato de ".$nome;
$mensagem=$_POST['mensagem'];
$telefone=$_POST['telefone'];
//para o envio em formato HTML
$headers = "MIME-Version: 1.0 Content-type: text/html;charset=utf-8 ";
 
//endereço do remitente
$headers .= "From: $email tel: $telefone";
 
//endereço de resposta, se queremos que seja diferente a do remitente
//$headers .= "Reply-To: cleitonduart@hotmail.com";
 
//endereços que receberão uma copia oculta $headers .= "Bcc: manel@desarrolloweb.com";
//endereços que receberão uma copia 
$headers .= "Cc: cadu019@hotmail.com";
mail($destinatario,$assunto,$mensagem,$headers);
?>
<html><head><title>window.location</title><script type='text/javascript'> alert('Mensagem enviada com sucesso!  Não repita o processo, e-mails adicionais serão ignorados!'); window.location='../../Cliente-visual/index.html'; </script> </head> <body> </body> </html>
