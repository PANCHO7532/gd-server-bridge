<?php
include 'config.inc.php';
$secret = $_POST['secret'];
$levelID = $_POST['levelID'];
$page = $_POST['page'];
$userID = $_POST['userID'];
$total = $_POST['total'];
$stage1 = curl_init('http://'.$server.'/'.$getcommentCallback);
curl_setopt($stage1, CURLOPT_POST, 1);
curl_setopt($stage1, CURLOPT_POSTFIELDS,"secret=$secret&levelID=$levelID&page=$page&userID=$userID&total=$total");
curl_setopt($stage1, CURLOPT_RETURNTRANSFER, true);
$responsedata = curl_exec($stage1);
curl_close($stage1);
echo $responsedata;
?>