<?php
include 'config.inc.php';
$udid = $_POST['udid'];
$levelID = $_POST['levelID'];
$secret = $_POST['secret'];
$stage1 = curl_init('http://'.$server.'/'.$deletelevelCallback);
curl_setopt($stage1, CURLOPT_POST, 1);
curl_setopt($stage1, CURLOPT_POSTFIELDS,"udid=$udid&levelID=$levelID&secret=$secret");
curl_setopt($stage1, CURLOPT_RETURNTRANSFER, true);
$responsedata = curl_exec($stage1);
curl_close($stage1);
echo $responsedata;
?>