<?php
error_reporting(E_ALL);
$dir = dirname(__FILE__);
$user = "test1";
$pass = "qwertz123";
$session = "1";
$cmd="taskkill /IM OpenCOVER.exe /F";

echo "run '$cmd'\n";
$res = shell_exec("$cmd");
echo $res;
?>