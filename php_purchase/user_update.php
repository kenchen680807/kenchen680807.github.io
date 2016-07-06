
<?php include_once("config.php");?>
    <div id="wrapper">
        <?php include_once("header.php");?>
        <?php include_once("menu.php");?>
        <div id="main_left">
            1
        </div>
        <div id="main_right">
<?php
include_once("dbclass/db.php");
$id=$_GET['id'];
$QUERYSQL="select * from user where id=".$id;
$UserRS=mysql_query($QUERYSQL);
$Row=mysql_fetch_object($UserRS);
?>
            
<form action="user_process.php" method="post">        
        <table class="user" border="1" >
            <caption>test table</caption>
            <tbody>
                <tr>
                    <td>帳號</td>
                    <td>
                        <input name="account" type="text" placeholder="最少輸入六個字元" value="<?php echo $Row->account;?>"/>
                    </td>
                </tr>
                <tr>
                    <td>設定密碼</td>
                    <td>
                        <input name="pwd" type="text" placeholder="最少輸入六個字元" value="<?php echo $Row->password;?>"/>
                    </td>
                </tr>
                <tr>
                    <td>日期</td>
                    <td>
                        <input type="date" name="date" placeholder="最少輸入六個字元" value="<?php echo $Row->date;?>"/>
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>
                        <input type="email" name="email" placeholder="最少輸入六個字元"  value="<?php echo $Row->email;?>"/>
                    </td>
                </tr>
                <tr>
                    <td>縣市</td>
                    <td>
                        <select>
                            <option>台北市</option>
                            <option>新北市</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>鄉鎮</td>
                    <td>
                        <select>
                            <option>信義</option>
                            <option>忠孝</option>
                        </select>
                    </td>
                </tr>
                 <tr>
                    <td>縣市</td>
                    <td>
                        男生<input type="radio" name="sex" value="1"/> 
                        女生<input type="radio" name="sex" value="2"/> 
                    </td>
                </tr>
                <tr>
                    <td>興趣</td>
                    <td>
                        打籃球<input type="checkbox" name="hobby[]"/>&nabla;
                        羽毛球<input type="checkbox" name="hobby[]"/>
                    </td>
                </tr>
            </tbody>
        </table>
        <input name="id" type="hidden" value="<?php echo $Row->id;?>" />
        <input name="method" type="hidden" value="update" />
        <input type="submit" value="註冊"/>
        <button type="button" onclick="location.href='user.php'">取消</button>
        
</form>
   
            
        </div>
        <?php include_once("footer.php");?>
    </div>
</body>

</html>
