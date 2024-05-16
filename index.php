<?php 
require_once("config.php");
$juan=new Usuario();
$juan->loadById(4);
echo $juan;
?>