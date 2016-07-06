
<?php 
include_once("config.php");
echo $_SESSION['name'];
?>
    <div id="wrapper">
        <?php include_once("header.php");?>
        <?php include_once("menu.php");?>
        <div id="main_left">
            <button type="button" onclick="location.href='user_add.php'">新增會員</button>
        </div>
        <div id="main_right">
        	
<?php

//查詢
$QUERYSQL="select * from user";
$UserRS=mysql_query($QUERYSQL);

echo "<table border='1'>";
//透過查詢資料庫將資料表轉成資料列表
while($Row=mysql_fetch_object($UserRS)){
    echo "<tr>";
    echo "<td>".$Row->id."</td>";
    echo "<td>".$Row->name."</td>";
    echo "<td>".$Row->cellphone."</td>";
    echo "<td>".$Row->email."</td>";
    echo "<td>".$Row->account."</td>";
    echo "<td><a href='user_update.php?id=".$Row->id."'>編輯</a></td>";
    echo "<td><a href='user_process.php?id=".$Row->id."&method=delete'>刪除</a></td>";
    echo "</tr>";
}
echo "</table>";
?>

        </div>
        <?php include_once("footer.php");?>
    </div>
</body>

</html>
