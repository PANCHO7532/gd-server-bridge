<?php
//Geometry Dash Account Server Bridge 1.0 BackupDataSV
include '../config.inc.php';
$username = $_POST['userName'];
$password = $_POST['password'];
$saveData = $_POST['saveData'];
$secret = $_POST['secret'];
$stage1 = curl_init('http://'.$server.'/'.$backupCallback);
curl_setopt($stage1, CURLOPT_POST, 1);
curl_setopt($stage1, CURLOPT_POSTFIELDS,"userName=$userName&password=$password&saveData=$saveData&secret=$secret");
curl_setopt($stage1, CURLOPT_RETURNTRANSFER, true);
$responsedata = curl_exec($stage1);
curl_close($stage1);
echo $responsedata;
?>