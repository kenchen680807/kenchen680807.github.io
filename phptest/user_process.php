<?php
include_once("dbclass/db.php");

                
$user_account=$_POST['account'];
$pwd=$_POST['pwd'];
$date=$_POST['date'];
$email=$_POST['email'];
$sex=$_POST['sex'];

$method=$_POST['method'];
if(empty($method)){
	$method=$_GET['method'];
}
switch ($method) {
	case 'add':
		//新增進貨主要資料表
		$SQL="insert into user set account='".$user_account."', password='".$pwd."' , email='".$email."' ";
		mysql_query($SQL);
		$main_id=mysql_insert_id();
		// insert into product(name,price) values('milk',100)
		break;
	case 'update':
			$id=$_POST['id'];
			$SQL="update user set account='".$user_account."', password='".$pwd."' , email='".$email."' where id=".$id;
			mysql_query($SQL);
		break;
	case 'delete':
		$id=$_GET['id'];
		$DELETE_SQL="delete from user where id=".$id;
		mysql_query($DELETE_SQL);
		break;
	default:
		# code...
		break;
}

header('location:user.php');
//編輯資料
//$UPDATE_SQL="update user set name='Allen' where id=2";
//mysql_query($UPDATE_SQL);

//刪除
//$DELETE_SQL="delete from user where id=3";
//mysql_query($DELETE_SQL);

//echo $user_account;

//查詢
//$QUERYSQL="select * from user";
//$UserRS=mysql_query($QUERYSQL);

//透過查詢資料庫將資料表轉成資料列表
//while($Row=mysql_fetch_object($UserRS)){
//    echo $Row->id.$Row->name."<br/>";
//}

/*
echo "test";

$user_data=array(
    'name'=>"Allen",
    "phone"=>"0977777"
);
print_r($user_data);

echo $user_data['name'];
*/
?>