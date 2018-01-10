<?php
include 'config.inc.php';
$stage1 = curl_init('http://'.$server.'/'.$updateusernameCallback);
$udid = $_POST['udid'];
$userName = $_POST['userName'];
$secret = $_POST['secret'];
curl_setopt($stage1, CURLOPT_POST, 1);
curl_setopt($stage1, CURLOPT_POSTFIELDS,"udid=$udid&userName=$userName&secret=$secret");
curl_setopt($stage1, CURLOPT_RETURNTRANSFER, true);
$responsedata = curl_exec($stage1);
curl_close($stage1);
echo $responsedata;
?>