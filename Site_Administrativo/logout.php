<?php
session_start();
$_SESSION = array();
session_destroy();
header("Location:../Cliente-visual/index.html");
?>
