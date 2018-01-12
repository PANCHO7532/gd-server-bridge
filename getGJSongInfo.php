<?php
include 'config.inc.php';
$songID = $_POST['songID'];
$secret = $_POST['secret'];
$stage1 = curl_init('http://'.$server.'/'.$getsongCallback);
curl_setopt($stage1, CURLOPT_POST, 1);
curl_setopt($stage1, CURLOPT_POSTFIELDS,"secret=$secret&songID=$songID");
curl_setopt($stage1, CURLOPT_RETURNTRANSFER, true);
$responsedata = curl_exec($stage1);
curl_close($stage1);
echo $responsedata;