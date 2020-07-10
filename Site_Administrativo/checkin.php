<?php
include "banco_de_dados/conexao_banco_de_dados.inc.php";
$email=$_POST["email"];
$senha=$_POST["password"];
$result1=mysqli_query($conn,"SELECT * FROM admnistrador WHERE email='$email' AND senha='$senha'");
$result2=mysqli_query($conn,"SELECT * FROM advogado WHERE email='$email' AND senha='$senha'");
$result3=mysqli_query($conn,"SELECT * FROM secretaria WHERE email='$email' AND senha='$senha'");
$row1=mysqli_fetch_assoc($result1);
$row2=mysqli_fetch_assoc($result2);
$row3=mysqli_fetch_assoc($result3);
    $email1=$row1['email'];
    $senha1=$row1['senha'];
    $nivel1=$row1['nivel_de_acesso'];
    $email2=$row2['email'];
    $senha2=$row2['senha'];
    $nivel2=$row2['nivel_de_acesso'];
    $email3=$row3['email'];
    $senha3=$row3['senha'];
    $nivel3=$row3['nivel_de_acesso'];
    if($nivel1==1){
        session_start();
        $_SESSION['email']=$email1;
        $_SESSION['senha']=$senha1;
        $_SESSION['nivel_de_acesso']=$nivel1;
        header("location:index_adm.php");
    }
    else if($nivel2==2){
        session_start();
        $_SESSION['email']=$email2;
        $_SESSION['senha']=$senha2;
        $_SESSION['nivel_de_acesso']=$nivel2;
        header("location:index_advogado/index_adv.php");
    }
    else if($nivel3==3){
        session_start();
        $_SESSION['email']=$email3;
        $_SESSION['senha']=$senha3;
        $_SESSION['nivel_de_acesso']=$nivel3;
        header("location:index_secretaria/index_secre.php");
    }
    else{
        echo'<script>alert("Usuário não encontrado");window.location.href = "login.html";</script>' ;
    }

?>
