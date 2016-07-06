
<?php include_once("config.php");?>

    <hr/>
    <form action="adminverfity.php" method="post">
        <table class="user" border="1">
            <caption>test table</caption>
            <tbody>
                <tr>
                    <td>帳號</td>
                    <td>
                       <input name="account" type="text" />
                    </td>
                </tr>
                <tr>
                    <td>密碼</td>
                    <td>
                       <input name="pwd" type="password" />
                    </td>
                </tr>
            </tbody>
        </table>
        <input type="submit" value="登入" />
    </form>
</body>

</html>
