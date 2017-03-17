<?php
$mysqli = new mysqli("localhost", "root", "", "bd_proyecto7");
$acentos = mysqli_query($mysqli, "SET NAMES 'utf8'");
?>