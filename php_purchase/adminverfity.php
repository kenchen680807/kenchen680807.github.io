<?php
session_start();
include_once("dbclass/db.php");


$account=$_POST['account'];
$password=$_POST['pwd'];
//查詢
$QUERYSQL="select * from admin where account='".$account."' and  password='".$password."'";
$UserRS=mysql_query($QUERYSQL);
$Row=mysql_fetch_object($UserRS);

if($Row->id!=0){
	$_SESSION['id']=$Row->id;
	$_SESSION['name']=$Row->name;
	header('location:user.php');
}
else{
	header('location:login.php');
}
?>