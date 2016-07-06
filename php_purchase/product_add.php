
<?php include_once("config.php");?>
<?php include_once("check.php");?>
    <hr/>
    <h3 id="main_title">test h3</h3>
    <h3 id="color">test h3222</h3>
    <form action="product_process.php" method="post">
        <table class="user" border="1">
            <caption>test table</caption>
            <tbody>
                <tr>
                    <td>主類別</td>                        
                    <td>
<select name="catelog_id">
<?php
//查詢
$QUERYSQL="select * from catelog";
$UserRS=mysql_query($QUERYSQL);

//透過查詢資料庫將資料表轉成資料列表
while($Row=mysql_fetch_object($UserRS)){
    echo "<option value='".$Row->id."'>".$Row->name."</option>";
}
?>
</select>
                    </td>
                </tr>
                <tr>
                    <td>產品名稱</td>
                    <td>
                        <input name="name" type="text" />
                    </td>
                </tr>
                <tr>
                    <td>價格(非會員)</td>
                    <td>
                       <input name="price" type="number" />
                    </td>
                </tr>
                <tr>
                    <td>價格(會員)</td>
                    <td>
                       <input name="member_price" type="number" value="100" />
                    </td>
                </tr>
                <tr>
                    <td>點數</td>
                    <td>
                       <input name="point" type="number" />
                    </td>
                </tr>
            </tbody>
        </table>
        <input name="method" type="hidden" value="add" />
        <input type="submit" value="新增產品" />
    </form>
</body>

</html>
