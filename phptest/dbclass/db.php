<?php

//php與資料庫連線
mysql_connect('localhost', 'root', '') or die("connect fail");

//選擇資料庫
mysql_select_db('usertest') or die("database connect fail");
                

?>