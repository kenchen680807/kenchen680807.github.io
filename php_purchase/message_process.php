<?php

include_once("dbclass/db.php");
                
$user_id=$_POST['user_id'];
$content=$_POST['content'];
$method=$_POST['method'];
if(empty($method)){
	$method=$_GET['method'];
}

switch ($method) {
	case 'add':
		//新增進貨主要資料表
		$SQL="insert into message set user_id='".$user_id."' , content='".$content."' ";
		mysql_query($SQL);
		$main_id=mysql_insert_id();
		// insert into product(name,price) values('milk',100)
		break;
	case 'update':
			$id=$_POST['id'];
			$SQL="update message set  user_id='".$user_id."' , content='".$content."'  where id=".$id;
			mysql_query($SQL);
		break;
	case 'delete':
		$id=$_GET['id'];
		$DELETE_SQL="delete from message where id=".$id;
		mysql_query($DELETE_SQL);
		break;
	default:
		# code...
		break;
}

header('location:message.php');
?>