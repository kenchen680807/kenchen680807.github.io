<?php

include_once("dbclass/db.php");
                
$name=$_POST['name'];
$level=$_POST['level'];
$method=$_POST['method'];
if(empty($method)){
	$method=$_GET['method'];
}

switch ($method) {
	case 'add':
		//新增進貨主要資料表
		$SQL="insert into catelog set name='".$name."' , level='".$level."' ";
		mysql_query($SQL);
		$main_id=mysql_insert_id();
		// insert into product(name,price) values('milk',100)
		break;
	case 'update':
			$id=$_POST['id'];
			$SQL="update catelog set  name='".$name."' , level='".$level."'  where id=".$id;
			mysql_query($SQL);
		break;
	case 'delete':
		$id=$_GET['id'];
		$DELETE_SQL="delete from catelog where id=".$id;
		mysql_query($DELETE_SQL);
		break;
	default:
		# code...
		break;
}

header('location:catelog.php');
?>