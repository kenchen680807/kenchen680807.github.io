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
    <form action="catelog_process.php" method="post">
        <table class="user" border="1">
            <caption>test table</caption>
            <tbody>
                <tr>
                    <td>level</td>                        
                    <td>
                        <input name="level" type="number" />
                    </td>
                </tr>
                <tr>
                    <td>類別名稱</td>
                    <td>
                        <input name="name" type="text" />
                    </td>
                </tr>
                
            </tbody>
        </table>
        <input name="method" type="hidden" value="add" />
        <input type="submit" value="新增類別" />
    </form>
</body>

</html>
