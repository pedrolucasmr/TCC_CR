<?php
error_reporting(0);
ini_set(�display_errors�, 0 );
session_start();
if(isset($_SESSION['email'])){
  $email_usuario=$_SESSION['email'];}
if(isset($_SESSION['senha'])){
  $senha_usuario=$_SESSION['senha'];}
if(isset($_SESSION['nivel_de_acesso'])){
  $nivel_usuario=$_SESSION['nivel_de_acesso'];}
if(!(empty($email_usuario) || empty ($senha_usuario) || empty ($nivel_usuario)))
{
 include "conexao_banco_de_dados.inc.php";
 $resultado1=mysqli_query($conn,"SELECT * FROM secretaria WHERE email='$email_usuario' AND senha='$senha_usuario'");
 if (mysqli_num_rows($resultado1)==1)
 {
 $res=mysqli_fetch_row($resultado1);
 if(($senha_usuario != $res[6])|| ($email_usuario!=$res[3])){
 unset ($_SESSION['email']);
 unset ($_SESSION['senha']);
 echo "<script>window.alert('Acesso negado, credenciais inv�lidas'); window.location.href='../../cliente-visual/index.html';</script>";
 exit;
 }
     else if($nivel_usuario!=3){
        unset ($_SESSION['email']);
        unset ($_SESSION['senha']);
        echo "<script>window.alert('Acesso negado'); window.location.href='../../cliente-visual/index.html';</script>";
        exit;
     }
 }
         
 }else{
     echo"<script>window.alert('Acesso negado, efetue login'); window.location.href='../../cliente-visual/index.html';</script>";
     exit;}
 ?>
 
