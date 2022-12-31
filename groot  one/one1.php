<?php
header('Content-Type: text/html; charset=utf-8');
//資料庫設定
//資料庫位置
$server = "localhost";
//資料庫名稱
$user ="tt";
//使用者帳號
$name = "root";
//使用者密碼
$password ="";  

//對資料庫連線
 $db = mysqli_connect($server, $name, $password, $user);
if (!$db){
   //echo "無法與資料庫連線" . mysqli_connect_error();
   die("連線失敗: " . mysqli_connect_error());
   
   //資料庫連線utf8
  // mysqli_set_charseet($conn,'utf8');

}


//資料庫顯示內容設定
//tt資料
/*$sql_com_tt_cent = "SELECT * FROM `1` ORDER BY `a` DESC LIMIT 1 ";  
$conn_sql_com_tt_cent = mysqli_query($db,$sql_com_tt_cent);
$Minfo_tt_cent = mysqli_fetch_all($conn_sql_com_tt_cent,MYSQLI_ASSOC);*/

//太陽能板資料
$sql_com_tt_vo = "SELECT * FROM `vo` ORDER BY `id` DESC LIMIT 5 ";  
$conn_sql_com_tt_vo = mysqli_query($db,$sql_com_tt_vo);
$Minfo_tt_vo = mysqli_fetch_all($conn_sql_com_tt_vo,MYSQLI_ASSOC);

//感測器
$sql_com_tt_gy = "SELECT * FROM `gy` ORDER BY `id` DESC LIMIT 1 ";  
$conn_sql_com_tt_gy = mysqli_query($db,$sql_com_tt_gy);
$Minfo_tt_gy = mysqli_fetch_all($conn_sql_com_tt_gy,MYSQLI_ASSOC);

//呼叫html
//include("one.html");

?>

