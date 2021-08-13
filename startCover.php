<?php
error_reporting(E_ALL);
$dir = dirname(__FILE__);
$user = "test1";
$pass = "qwertz123";
$session = "1";
$config = $_GET["config"];
$cmd = "C:\\tmp\startCover.bat \"$config\"";
$fulcmd = "$dir\PsExec.exe -accepteula -u $user -p $pass -i $session -d \"\"$cmd\"\"";

echo "run '$cmd'\n";
//echo "run '$fulcmd'\n";
$res = shell_exec($fulcmd);
echo $res;
?>