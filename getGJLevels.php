<?php
include 'config.inc.php';
$secret = $_POST['secret'];
$type = $_POST['type'];
$diff = $_POST['diff'];
$len = $_POST['len'];
$page = $_POST['page'];
$star = $_POST['star'];
$total = $_POST['total'];
$str = $_POST['str'];
$uncompleted = $_POST['uncompleted'];
$featured = $_POST['featured'];
$song = $_POST['song'];
$stage1 = curl_init('http://'.$server.'/'.$getLevelsCallback);
curl_setopt($stage1, CURLOPT_POST, 1);
curl_setopt($stage1, CURLOPT_POSTFIELDS,"secret=$secret&type=$type&str=$str&diff=$diff&len=$len&page=$page&star=$star&total=$total&uncompleted=$uncompleted&featured=$featured&song=$song");
curl_setopt($stage1, CURLOPT_RETURNTRANSFER, true);
$responsedata = curl_exec($stage1);
curl_close($stage1);
echo $responsedata;
?>