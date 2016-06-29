<html>

<head>
    <title>phptest</title>
    <meta charset="utf-8" />
    <style type="text/css">
    table.user {
        border-style: dashed;
    }
    
    h3#color {
        color: red;
        font-size: 18px;
    }
    
    h3#main_title {
        font-size: 24px;
        font-weight: 600;
    }
    </style>
</head>

<body>

<?php
include_once("dbclass/db.php");
$id=$_GET['id'];
$QUERYSQL="select * from product where id=".$id;
$UserRS=mysql_query($QUERYSQL);
$Row=mysql_fetch_object($UserRS);
?>
    <hr/>
    <form action="product_process.php" method="post">
        <table class="user" border="1">
            <caption>test table</caption>
            <tbody>
                <tr>
                    <td>主類別</td>                        
                    <td>
        <select name="catelog_id">
            <option>Please cHOOSE</option>
            <option value="1" <?php if($Row->catelog_id==1) echo "selected";?>>1</option>
            <option value="2" <?php if($Row->catelog_id==2) echo "selected";?>>2</option>
        </select>
                    </td>
                </tr>
                <tr>
                    <td>產品名稱</td>
                    <td>
                        <input name="name" type="text" value="<?php echo $Row->name;?>" />
                    </td>
                </tr>
                <tr>
                    <td>價格(非會員)</td>
                    <td>
                       <input name="price" type="number" value="<?php echo $Row->price;?>"/>
                    </td>
                </tr>
                <tr>
                    <td>價格(會員)</td>
                    <td>
                       <input name="member_price" type="number" value="<?php echo $Row->member_price;?>" />
                    </td>
                </tr>
                <tr>
                    <td>點數</td>
                    <td>
                       <input name="point" type="number" value="<?php echo $Row->point;?>"/>
                    </td>
                </tr>
            </tbody>
        </table>
        <input name="id" type="hidden" value="<?php echo $Row->id;?>" />
        <input name="method" type="hidden" value="update" />
        <input type="submit" value="編輯產品" />
    </form>
</body>

</html>
