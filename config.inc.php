<?php
//===================================================
//Geometry Dash Server Bridge
//Coded by PANCHO7532 - P7COMunications LTD S.A
//Supported versions:
// 1.0, 1.1, 1.2, 1.3, 1.4, 1.5, 1.6, 1.7, 1.8, 1.9
//===================================================
//Modify the "$server" var with the server url to connect (without the "http://")
//Example: "www.boomlings.com/database"
//Put the value under these => " (value goes here, without spaces) "
//===================================================
error_reporting(0);
$server = "pi.michaelbrabec.cz:9010/a";
$mapPacksCallback = "getGJMapPacks21.php";
$getLevelsCallback = "getGJLevels21.php";
$downloadlevelCallback = "downloadGJLevel22.php";
$uploadcommentCallback = "uploadGJComment21.php";
$updatescoreCallback = "updateGJUserScore22.php";
$getcommentCallback = "getGJComments21.php";
$deletecommentCallback = "deleteGJComment20.php";
$uploadlevelCallback = "uploadGJLevel21.php";
$deletelevelCallback = "deleteGJLevelUser20.php";
$scoresCallback = "getGJScores20.php";
$creatorsCallback = "getGJCreators.php";
$likeCallback = "likeGJItem21.php";
$rateCallback = "rateGJStars20.php";
$updateusernameCallback = "updateGJUserName21.php";
//Account System
$loginCallback = "accounts/loginGJAccount.php";
$backupCallback = "accounts/backupGJAccount.php";
$syncCallback = "accounts/syncGJAccount.php";
//1.9 STUFF
$getsongCallback = "getGJSongInfo.php";
?>