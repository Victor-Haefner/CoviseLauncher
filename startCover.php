<?php
error_reporting(E_ALL);
$dir = dirname(__FILE__);
$user = "test1";
$pass = "qwertz123";
$session = "1";
$model = "C:\\tmp\\triceratops.obj";
$config = $_GET["config"];
$configName = basename($config); // TODO: find out how to set full path
$cmd = "C:\\tmp\startCover.bat $configName $model ";
$fulcmd = "$dir\PsExec.exe -accepteula -u $user -p $pass -i $session -d \"\"$cmd\"\"";

echo "run '$cmd'\n";
//echo "run '$fulcmd'\n";
shell_exec("copy $dir\startCover.bat C:\\tmp\startCover.bat");
shell_exec("copy $dir\\triceratops.obj $model");
$res = shell_exec($fulcmd);
echo $res;
?>