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
                            <option value="1">1</option>
                            <option value="2">2</option>
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
