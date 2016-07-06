<?php

include_once("dbclass/db.php");
                
$payment_date=$_POST['payment_date'];
$status=$_POST['status'];
$remark=$_POST['remark'];

//echo 顯示非陣列資料
//print_r 顯示陣列資料

//新增進貨主要資料表
$SQL="insert into purchase_main set payment_date='".$payment_date."', status='".$status."' , remark='".$remark."' ";
mysql_query($SQL);
$main_id=mysql_insert_id();
echo $main_id;


foreach ($_POST['product_id'] as $key => $value) {
	//echo $_POST['product_id'][$key]."<br/>";
	//新增子資料表
$SQL="insert into purchase_sub set purchase_main_id=".$main_id.",product_id=".$_POST['product_id'][$key].",price=".$_POST['price'][$key].",amount=".$_POST['amount'][$key].",price_total=".$_POST['price_total'][$key].",due_date=".$_POST['due_date'][$key]."";
mysql_query($SQL);
}
header('location:purchase_records.php');
/*

//編輯資料
$UPDATE_SQL="update user set name='Allen' where id=2";
//mysql_query($UPDATE_SQL);

//刪除
$DELETE_SQL="delete from user where id=3";
mysql_query($DELETE_SQL);

//echo $user_account;

//查詢
$QUERYSQL="select * from user";
$UserRS=mysql_query($QUERYSQL);

//透過查詢資料庫將資料表轉成資料列表
while($Row=mysql_fetch_object($UserRS)){
    echo $Row->id.$Row->name."<br/>";
}

*/
?>