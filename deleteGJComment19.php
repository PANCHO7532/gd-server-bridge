<?php
include 'config.inc.php';
$udid = $_POST['udid'];
$commentID = $_POST['commentID'];
$accountID = $_POST['accountID'];
$levelID = $_POST['levelID'];
$secret = $_POST['secret'];
$stage1 = curl_init('http://'.$server.'/'.$deletecommentCallback);
curl_setopt($stage1, CURLOPT_POST, 1);
curl_setopt($stage1, CURLOPT_POSTFIELDS,"udid=$udid&commentID=$commentID&levelID=$levelID&secret=$secret&accountID=$accountID");
curl_setopt($stage1, CURLOPT_RETURNTRANSFER, true);
$responsedata = curl_exec($stage1);
curl_close($stage1);
echo $responsedata;
?>