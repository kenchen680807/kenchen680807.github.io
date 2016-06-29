
<?php include_once("config.php");?>
    <div id="wrapper">
        <?php include_once("header.php");?>
        <?php include_once("menu.php");?>
        <div id="main_left">
            <button type="button" onclick="location.href='purchase_add.php'">新增進貨</button>
        </div>
        <div id="main_right">
        	
<?php

//查詢
$QUERYSQL="select * from purchase_main";
$UserRS=mysql_query($QUERYSQL);

//透過查詢資料庫將資料表轉成資料列表
while($Row=mysql_fetch_object($UserRS)){
    echo $Row->id."~~~~~".$Row->payment_date."<br/>";

    //查詢子表進貨產品
    $SUB="select * from purchase_sub where purchase_main_id=".$Row->id;
	$SUBRS=mysql_query($SUB);
	while($SRow=mysql_fetch_object($SUBRS)){
		echo "------>".$SRow->id."~~~~~".$SRow->product_id."~~~~~".$SRow->price."<br/>";
	}
}
?>

        </div>
        <?php include_once("footer.php");?>
    </div>
</body>

</html>
