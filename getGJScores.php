<?php
include 'config.inc.php';
$secret = $_POST['secret'];
$type = $_POST['type'];
$udid = $_POST['udid'];
$stage1 = curl_init('http://'.$server.'/'.$scoresCallback);
curl_setopt($stage1, CURLOPT_POST, 1);
curl_setopt($stage1, CURLOPT_POSTFIELDS,"secret=$secret&type=$type&udid=$udid");
curl_setopt($stage1, CURLOPT_RETURNTRANSFER, true);
$responsedata = curl_exec($stage1);
curl_close($stage1);
echo $responsedata;
?>