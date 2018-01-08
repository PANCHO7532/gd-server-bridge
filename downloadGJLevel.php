<?php
include 'config.inc.php';
$secret = $_POST['secret'];
$levelID = $_POST['levelID'];
$inc = $_POST['inc'];
$stage1 = curl_init('http://'.$server.'/'.$downloadlevelCallback);
curl_setopt($stage1, CURLOPT_POST, 1);
curl_setopt($stage1, CURLOPT_POSTFIELDS,"secret=$secret&levelID=$levelID&inc=$inc");
curl_setopt($stage1, CURLOPT_RETURNTRANSFER, true);
$responsedata = curl_exec($stage1);
curl_close($stage1);
echo $responsedata;
?>