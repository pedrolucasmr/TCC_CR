<?php
$servername="localhost";
$username="root";
$password="";
$conn= new mysqli($servername,$username,$password);
if (!$conn){
    die("Falha na conexão". mysqli_connect_error());
}
mysqli_select_db($conn,'lopes_advocacia');
?>