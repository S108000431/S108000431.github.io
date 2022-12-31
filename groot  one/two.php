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
    <script type="text/javascript" src="one.js"> </script>
      
      <title>sometext</title><meta charset="utf-8"/>
      <title>太陽能監測發電與發電預測</title>
     
      <link rel="stylesheet" type="text/css" href="one.css">   
<head>  
</head>

<body>
<div class="bod2">
<h1>太陽能監測發電與發電預測</h1>
    
    <script type=text/javascript src="js/one.js"></script>

        <div><span id="clock"></span></div>
        <script type="text/javascript">
        var clock = new Clock();
        clock.display(document.getElementById("clock"));
     </script>
    
    <!--目錄清單-->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a style="color:White;"href="one.php">現況</a>
        <a style="color:White;" href="time.php">時間查詢</a>
        <a style="color:White;" href="user.php">機台狀況</a>
        <a style="color:White;" href="two.php">太陽能板數據</a>
        <a style="color:White;" href="three.php">感測器數據</a>

    </nav>


      <a style="color:#e60000;text-decoration:none;font-size:50px;">太陽能板數據</a>
        
   
        <div class="glassmorphism"id = "allindat">
            <table style="border-collapse:separate; border-spacing:200px 10px;" >
         
                <thead>
                    <tr>
                        <th>編號</th>
                        <th>時間</th>
                        <th>電壓</th>
                        <th>電流</th>
                        <th>功率</th>
                    </tr>
                </thead>
                
        
                <tbody>
                
                    <tr>
                        <td><?php echo $Minfo_tt_vo[0]['id']?></td>
                        <td><?php echo $Minfo_tt_vo[0]['time']?></td>
                        <td><?php echo $Minfo_tt_vo[0]['vo']?></td>
                        <td><?php echo $Minfo_tt_vo[0]['co']?></td>
                        <td><?php echo $Minfo_tt_vo[0]['pow']?></td>
                    </tr>
                    <tr>
                        <td><?php echo $Minfo_tt_vo[1]['id']?></td>
                        <td><?php echo $Minfo_tt_vo[1]['time']?></td>
                        <td><?php echo $Minfo_tt_vo[1]['vo']?></td>
                        <td><?php echo $Minfo_tt_vo[1]['co']?></td>
                        <td><?php echo $Minfo_tt_vo[1]['pow']?></td>
                    </tr>
                    <tr>
                        <td><?php echo $Minfo_tt_vo[2]['id']?></td>
                        <td><?php echo $Minfo_tt_vo[2]['time']?></td>
                        <td><?php echo $Minfo_tt_vo[2]['vo']?></td>
                        <td><?php echo $Minfo_tt_vo[2]['co']?></td>
                        <td><?php echo $Minfo_tt_vo[2]['pow']?></td>
                    </tr>
                    <tr>
                        <td><?php echo $Minfo_tt_vo[3]['id']?></td>
                        <td><?php echo $Minfo_tt_vo[3]['time']?></td>
                        <td><?php echo $Minfo_tt_vo[3]['vo']?></td>
                        <td><?php echo $Minfo_tt_vo[3]['co']?></td>
                        <td><?php echo $Minfo_tt_vo[3]['pow']?></td>
                    </tr>
                    <tr>
                        <td><?php echo $Minfo_tt_vo[4]['id']?></td>
                        <td><?php echo $Minfo_tt_vo[4]['time']?></td>
                        <td><?php echo $Minfo_tt_vo[4]['vo']?></td>
                        <td><?php echo $Minfo_tt_vo[4]['co']?></td>
                        <td><?php echo $Minfo_tt_vo[4]['pow']?></td>
                    </tr>
                
                </tbody>
            
        
        </div>	
        <script type="text/javascript">
            setInterval(function () {
            $("#allindat").load(location.href + " #allindat*","");
           ;//注意後面DIV的ID前面的空格，很重要！沒有空格的話，會出錯（也可以使用類名）
        }, 1000);//1秒自動刷新   
        </script> 
    </div>      
</body>
</html>