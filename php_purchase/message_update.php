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
$QUERYSQL="select * from message where id=".$id;
$UserRS=mysql_query($QUERYSQL);
$Row=mysql_fetch_object($UserRS);
?>
    <hr/>
    <form action="catelog_process.php" method="post">
        <table class="user" border="1">
            <caption>test table</caption>
            <tbody>
                
                <tr>
                    <td>user id</td>
                    <td>
                        <input name="user_id" type="number" value="<?php echo $Row->user_id;?>" />
                    </td>
                </tr>
                <tr>
                    <td>content</td>
                    <td>
                       <input name="content" type="text" value="<?php echo $Row->content;?>"/>
                    </td>
                </tr>
                
            </tbody>
        </table>
        <input name="id" type="hidden" value="<?php echo $Row->id;?>" />
        <input name="method" type="hidden" value="update" />
        <input type="submit" value="編輯類別" />
    </form>
</body>

</html>
