<?php
include 'config.inc.php';
$secret = $_POST['secret'];
$page = $_POST['page'];
$gameVersion = $_POST['gameVersion'];
$stage1 = curl_init('http://'.$server.'/'.$mapPacksCallback);
curl_setopt($stage1, CURLOPT_POST, 1);
curl_setopt($stage1, CURLOPT_POSTFIELDS,"gameVersion=$gameVersion&page=$page&secret=$secret");
curl_setopt($stage1, CURLOPT_RETURNTRANSFER, true);
$responsedata = curl_exec($stage1);
curl_close($stage1);
echo $responsedata;
?>