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

// having troubles? test in cmd with
//  PsExec.exe -accepteula -u test1 -p qwertz123 -i 1 -d "C:\Windows\Notepad.exe"
//  you may have to configure something in the "Local Security Policy" editor
//   > Local Policies > User Rights Assignment
//    enable "allow log on locally" and "allow log on through remote desktop services"
// to check if the user is correct do
//  runas /user:test1 cmd
// to reset the password
//  net user test1 qwertz123
?>