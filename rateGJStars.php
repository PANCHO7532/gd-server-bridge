<?php
include 'config.inc.php';
$secret = $_POST['secret'];
$levelID = $_POST['levelID'];
$rating = $_POST['rating'];
$stage1 = curl_init('http://'.$server.'/'.$rateCallback);
curl_setopt($stage1, CURLOPT_POST, 1);
curl_setopt($stage1, CURLOPT_POSTFIELDS,"levelID=$levelID&secret=$secret&rating=$rating");
curl_setopt($stage1, CURLOPT_RETURNTRANSFER, true);
$responsedata = curl_exec($stage1);
curl_close($stage1);
echo $responsedata;
?>