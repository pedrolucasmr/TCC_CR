<?php
//error_reporting(0);
//ini_set(“display_errors”, 0 );
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
 $resultado1=mysqli_query($conn,"SELECT * FROM admnistrador WHERE email='$email_usuario' AND senha='$senha_usuario'");
 if (mysqli_num_rows($resultado1)==1)
 {
 $res=mysqli_fetch_row($resultado1);
 if(($senha_usuario != $res[3])|| ($email_usuario!=$res[2])){
 unset ($_SESSION['email']);
 unset ($_SESSION['senha']);
 echo "<script>window.alert('Acesso negado, credenciais inválidas'); window.location.href='../../cliente-visual/index.html';</script>";
 exit;
 }
     else if($nivel_usuario!=1){
        unset ($_SESSION['email']);
        unset ($_SESSION['senha']);
        echo "<script>window.alert('Acesso negado'); window.location.href='../../cliente-visual/index.html';</script>";
        exit;
     }
 }
         
 }else if((empty($email_usuario) || empty ($senha_usuario) || empty ($nivel_usuario))){
     echo"<script>window.alert('Acesso negado, efetue login'); window.location.href='../cliente-visual/index.html';</script>";
     exit;}
 ?>
 
