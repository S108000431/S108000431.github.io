<meta http-equiv="content-type" content="text/html; charset=utf-8">
<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
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
<!DOCTYPE html>

<html>
<head>
       <script src="jquery-1.11.3.min.js"></script>
       <script type="text/javascript" src="one.js"> </script>
        <!--- <script type="text/javascript" src="one2.js"> </script>--->
      
        <title>sometext</title><meta charset="utf-8"/>
        <title>太陽能監測發電與發電預測</title>
       
        <link rel="stylesheet" type="text/css" href="one.css">    
      
    
</head>

<body>
  
  
    <div class="bod">
        
        <h1>太陽能監測發電與發電預測</h1>
 
        <!---<script type=text/javascript src="js/one.js"></script>--->
           
            <!--時間-->
            <div><span id="clock"></span></div>
            <script type="text/javascript">
            var clock = new Clock();
            clock.display(document.getElementById("clock"));
            </script>

         <p>最新即時數據</p>

        <!--目錄清單-->
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <a href="one.php"style="color:White;">現況</a>
            <a style="color:White;" href="time.php">時間查詢</a>
            <a style="color:White;" href="user.php">機台狀況</a>
            <a href="two.php"style="color:White;">太陽能板數據</a>
            <a style="color:White;" href="three.php">感測器資料</a>
           
        </nav>
                <!--表格資料-->
        <ul id = "allinit">
            
            <li class="card" style="--accent-color: #D00903">
                
                <div class="icon"><i class="fa-light fa-temperature-sun"></i></div>
                <div class="title">溫度</div>
                <div class="content" id = "init1"><?php echo $Minfo_tt_gy[0]['temperature']?> °C</div>
                <div class="title">資料時間</div>
                <div class="content" id = "init2"><?php echo $Minfo_tt_gy[0]['time']?></div>
            </li>
            <li class="card" style="--accent-color: #64BECF">
                <div class="icon" ><i class="fa-solid fa-fire-flame"></i></div>
                <div class="title">濕度</div>
                <div class="content" id = "init3"><?php echo $Minfo_tt_gy[0]['humidity']?> %</div>
                <div class="title">資料時間</div>
                <div class="content" id = "init4"><?php echo $Minfo_tt_gy[0]['time']?></div>
            </li>
            <li class="card" style="--accent-color: #EC9E38 ">
                <div class="icon"><i class="fa-light fa-bolt"></i></div>
                <div class="title">發電量</div>
                <div class="content" id = "init5"><?php echo $Minfo_tt_vo[0]['pow']?> kw/h</div>
                <div class="title">資料時間</div>
                <div class="content" id = "init6"><?php echo $Minfo_tt_vo[0]['time']?></div>
            </li>
            <li class="card" style="--accent-color: #EC9E38 ">
                <div class="icon"><i class="fa-light fa-bolt"></i></div>
                <div class="title">預測發電量</div>
                <div class="content" id = "init5"> kw/h</div>
                <div class="title">資料時間</div>
                <div class="content" id = "init6"></div>
            </li>
    
        </ul>
        <script type="text/javascript">
        setInterval(function () {
            $("#allinit").load(location.href + " #allinit*","");
           ;//注意後面DIV的ID前面的空格，很重要！沒有空格的話，會出錯（也可以使用類名）
        }, 1000);//1秒自動刷新   
        </script> 
    </div>

</body>
</html>