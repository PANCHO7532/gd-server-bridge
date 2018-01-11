<?php
include 'config.inc.php';
$udid = $_POST['udid'];
$userName = $_POST['userName'];
$secret = $_POST['secret'];
$levelID = $_POST['levelID'];
$levelName = $_POST['levelName'];
$levelDesc = $_POST['levelDesc'];
$levelVersion = $_POST['levelVersion'];
$levelLength = $_POST['levelLength'];
$audioTrack = $_POST['audioTrack'];
$gameVersion = $_POST['gameVersion'];
$auto = $_POST['auto'];
$password = $_POST['password'];
//1.8 STUFF
$original = $_POST['original'];
$twoPlayer = $_POST['twoPlayer'];
//END OF 1.8 STUFF
$levelString = $_POST['levelString'];
$levelReplay = $_POST['levelReplay'];
$stage1 = curl_init('http://'.$server.'/'.$uploadlevelCallback);
curl_setopt($stage1, CURLOPT_POST, 1);
curl_setopt($stage1, CURLOPT_POSTFIELDS,"udid=$udid&userName=$userName&secret=$secret&levelID=$levelID&levelName=$levelName&levelDesc=$levelDesc&levelVersion=$levelVersion&levelLength=$levelLength&audioTrack=$audioTrack&gameVersion=$gameVersion&auto=$auto&password=$password&original=$original&twoPlayer=$twoPlayer&levelString=$levelString&levelReplay=$levelReplay");
curl_setopt($stage1, CURLOPT_RETURNTRANSFER, true);
$responsedata = curl_exec($stage1);
curl_close($stage1);
echo $responsedata;
?>