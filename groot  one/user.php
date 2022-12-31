<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM user ORDER BY id DESC");
?>

<html>
<head>
    
    <title>Homepage</title>
</head>

<body>
<a href="add.php">新增資料 </a><br>
<a href="one.php">追日現況</a><br/>
<h1>機器狀況</h1>
    <table width='80%' border=1>

    <tr>
        <th>機器名稱</th> <th>原因</th> <th>狀態</th> <th>更新</th>
    </tr>
    <?php
    while($user_data = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>".$user_data['name']."</td>";
        echo "<td>".$user_data['reason']."</td>";
        echo "<td>".$user_data['state']."</td>";
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
    }
    
    ?>
    </table>
</body>
</html>