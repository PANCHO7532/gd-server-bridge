<?php
include 'config.inc.php';
$udid = $_POST['udid'];
$userName = $_POST['userName'];
$secret = $_POST['secret'];
$stars = $_POST['stars'];
$demons = $_POST['demons'];
$icon = $_POST['icon'];
$color1 = $_POST['color1'];
$color2 = $_POST['color2'];
$iconType = $_POST['iconType'];
$coins = $_POST['coins'];
$special = $_POST['special'];
$gameVersion = $_POST['gameVersion'];
$stage1 = curl_init('http://'.$server.'/'.$updatescoreCallback);
curl_setopt($stage1, CURLOPT_POST, 1);
curl_setopt($stage1, CURLOPT_POSTFIELDS,"udid=$udid&userName=$userName&secret=$secret&stars=$stars&demons=$demons&icon=$icon&color1=$color1&color2=$color2&iconType=$iconType&coins=$coins&special=$special&gameVersion=$gameVersion");
curl_setopt($stage1, CURLOPT_RETURNTRANSFER, true);
$responsedata = curl_exec($stage1);
curl_close($stage1);
echo $responsedata;
?>