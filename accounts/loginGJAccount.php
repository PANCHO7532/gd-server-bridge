<?php
//Geometry Dash Account Server Bridge V1.0
include '../config.inc.php';
$udid = $_POST['udid'];
$userName = $_POST['userName'];
$password = $_POST['password'];
$sID = $_POST['sID'];
$secret = $_POST['secret'];
$stage1 = curl_init('http://'.$server.'/'.$loginCallback);
curl_setopt($stage1, CURLOPT_POST, 1);
curl_setopt($stage1, CURLOPT_POSTFIELDS,"udid=$udid&userName=$userName&password=$password&sID=$sID&secret=$secret");
curl_setopt($stage1, CURLOPT_RETURNTRANSFER, true);
$responsedata = curl_exec($stage1);
curl_close($stage1);
echo $responsedata;
?>