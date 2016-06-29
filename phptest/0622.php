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
    <form action="purchase.php" method="post">
        <table class="user" border="1">
            <caption>test table</caption>
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
                        <input name="product_id[]" type="number" />
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
                        <input name="product_id[]" type="number" />
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
                        <input name="product_id[]" type="number" />
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
    </form>
</body>

</html>
