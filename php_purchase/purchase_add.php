<?php include_once("config.php");?>
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
    <hr/>
    <h3 id="main_title">新增進貨</h3>
    <form action="purchase.php" method="post">
        <table class="user" border="1">
            <tbody>
                <tr>
                    <td>付款日</td>
                    <td>
                        <input name="payment_date" type="text" />
                    </td>
                </tr>
                <tr>
                    <td>是否付款</td>
                    <td>
                        <select name="status">
                            <option value="1">已付款</option>
                            <option value="0">未付款</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>備註</td>
                    <td>
                        <textarea name="remark" cols="20" rows="7"></textarea>
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="user" border="1">
            <thead>
                <tr>
                    <td>產品</td>
                    <td>單價</td>
                    <td>數量</td>
                    <td>總價</td>
                    <td>到期日</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <select name="product_id[]">
                        <?php
                        //查詢
                        $QUERYSQL="select * from product";
                        $UserRS=mysql_query($QUERYSQL);

                        //透過查詢資料庫將資料表轉成資料列表
                        while($Row=mysql_fetch_object($UserRS)){
                            echo "<option value='".$Row->id."'>".$Row->name."</option>";
                        }
                        ?>
                        </select>
                    </td>
                    <td>
                        <input name="price[]" type="number" />
                    </td>
                    <td>
                        <input name="amount[]" type="number" />
                    </td>
                    <td>
                        <input name="price_total[]" type="number" />
                    </td>
                    <td>
                        <input name="due_date[]" type="text" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <select name="product_id[]">
                        <?php
                        //查詢
                        $QUERYSQL="select * from product";
                        $UserRS=mysql_query($QUERYSQL);

                        //透過查詢資料庫將資料表轉成資料列表
                        while($Row=mysql_fetch_object($UserRS)){
                            echo "<option value='".$Row->id."'>".$Row->name."</option>";
                        }
                        ?>
                        </select>                        
                    </td>
                    <td>
                        <input name="price[]" type="number" />
                    </td>
                    <td>
                        <input name="amount[]" type="number" />
                    </td>
                    <td>
                        <input name="price_total[]" type="number" />
                    </td>
                    <td>
                        <input name="due_date[]" type="text" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <select name="product_id[]">
                        <?php
                        //查詢
                        $QUERYSQL="select * from product";
                        $UserRS=mysql_query($QUERYSQL);

                        //透過查詢資料庫將資料表轉成資料列表
                        while($Row=mysql_fetch_object($UserRS)){
                            echo "<option value='".$Row->id."'>".$Row->name."</option>";
                        }
                        ?>
                        </select>  
                    </td>
                    <td>
                        <input name="price[]" type="number" />
                    </td>
                    <td>
                        <input name="amount[]" type="number" />
                    </td>
                    <td>
                        <input name="price_total[]" type="number" />
                    </td>
                    <td>
                        <input name="due_date[]" type="text" />
                    </td>
                </tr>
            </tbody>
        </table>
        <input type="submit" value="進貨" />
        <button type="button" onclick="location.href='purchase_records.php'">取消</button>
    </form>
</body>

</html>
