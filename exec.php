<?php
error_reporting(E_ALL);
$cmd = $_GET["cmd"];
//$cmd = "C:\Windows\Notepad.exe";
$dir = dirname(__FILE__);
$user = "test1";
$pass = "qwertz123";
$session = "1";

echo "run '$cmd'\n";
$res = shell_exec("$dir\PsExec.exe -accepteula -u $user -p $pass -i $session -d \"$cmd\"");
echo $res;
?>