<?php
error_reporting(E_ALL);
$path = $_GET["path"];
if (file_exists($path)) echo file_get_contents($path);
else echo "File not found!";
?>