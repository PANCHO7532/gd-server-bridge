<?php
include 'config.inc.php';
$udid = $_POST['udid'];
$accountID = $_POST['accountID'];
$username = $_POST['userName'];
$secret = $_POST['secret'];
$levelID = $_POST['levelID'];
$comment = $_POST['comment'];
$stage1 = curl_init('http://'.$server.'/'.$uploadcommentCallback);
curl_setopt($stage1, CURLOPT_POST, 1);
curl_setopt($stage1, CURLOPT_POSTFIELDS,"udid=$udid&userName=$username&secret=$secret&levelID=$levelID&comment=$comment&accountID=$accountID");
curl_setopt($stage1, CURLOPT_RETURNTRANSFER, true);
$responsedata = curl_exec($stage1);
curl_close($stage1);
echo $responsedata;
?>