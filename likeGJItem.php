<?php
include 'config.inc.php';
$stage1 = curl_init('http://'.$server.'/'.$likeCallback);
$secret = $_POST['secret'];
$itemID = $_POST['itemID'];
$like = $_POST['like'];
$type = $_POST['type'];
curl_setopt($stage1, CURLOPT_POST, 1);
curl_setopt($stage1, CURLOPT_POSTFIELDS,"secret=$secret&itemID=$itemID&like=$like&type=$type");
curl_setopt($stage1, CURLOPT_RETURNTRANSFER, true);
$responsedata = curl_exec($stage1);
curl_close($stage1);
echo $responsedata;
?>