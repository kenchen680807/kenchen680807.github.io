<?php

include_once("dbclass/db.php");
include_once("check.php");
    
$catelog_id=$_POST['catelog_id'];
$name=$_POST['name'];
$price=$_POST['price'];
$member_price=$_POST['member_price'];
$point=$_POST['point'];
$method=$_POST['method'];

switch ($method) {
	case 'add':
		//新增進貨主要資料表
		$SQL="insert into product set catelog_id='".$catelog_id."', name='".$name."' , price='".$price."' ,member_price='".$member_price."',point='".$point."'";
		mysql_query($SQL);
		$main_id=mysql_insert_id();
		// insert into product(name,price) values('milk',100)
		break;
	case 'update':
			$id=$_POST['id'];
			$SQL="update product set catelog_id='".$catelog_id."', name='".$name."' , price='".$price."' ,member_price='".$member_price."',
			point='".$point."' where id=".$id;
			mysql_query($SQL);
		break;
	default:
		# code...
		break;
}

header('location:product.php');
?>