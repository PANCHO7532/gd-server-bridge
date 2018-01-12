<?php
//Geometry Dash Account Server Bridge 1.0 SyncDataSV
include '../config.inc.php';
$username = $_POST['userName'];
$password = $_POST['password'];
$secret = $_POST['secret'];
$stage1 = curl_init('http://'.$server.'/'.$syncCallback);
curl_setopt($stage1, CURLOPT_POST, 1);
curl_setopt($stage1, CURLOPT_POSTFIELDS,"userName=$userName&password=$password&secret=$secret");
curl_setopt($stage1, CURLOPT_RETURNTRANSFER, true);
$responsedata = curl_exec($stage1);
curl_close($stage1);
echo $responsedata;
?>