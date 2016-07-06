
<?php include_once("config.php");?>
<?php include_once("check.php");?>
    <div id="wrapper">
        <?php include_once("header.php");?>
        <?php include_once("menu.php");?>
        <div id="main_left">
            <button type="button" onclick="location.href='purchase_add.php'">新增進貨</button>
        </div>
        <div id="main_right">
        	
<?php

//查詢
$QUERYSQL="select * from purchase_main order by id desc";
$UserRS=mysql_query($QUERYSQL);
echo "<table border='1'>";
//透過查詢資料庫將資料表轉成資料列表
while($Row=mysql_fetch_object($UserRS)){
    echo "<tr>";
    echo "<td>".$Row->id."</td>";
    echo "<td>".$Row->payment_date."</td>";
    echo "<td><a href='catelog_update.php?id=".$Row->id."'>編輯</a></td>";
    echo "<td><a href='catelog_process.php?id=".$Row->id."&method=delete'>刪除</a></td>";
    echo "</tr>";

    /*
    //查詢子表進貨產品
    $SUB="select * from purchase_sub where purchase_main_id=".$Row->id;
	$SUBRS=mysql_query($SUB);
	while($SRow=mysql_fetch_object($SUBRS)){
		echo "------>".$SRow->id."~~~~~".$SRow->product_id."~~~~~".$SRow->price."<br/>";
	}
    */
}
echo "</table>";
?>

        </div>
        <?php include_once("footer.php");?>
    </div>
</body>

</html>
