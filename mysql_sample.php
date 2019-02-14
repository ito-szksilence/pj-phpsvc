<?php
    //mysqlに接続
    $link = mysql_connect('localhost','root','Mi19745029_');
    //DBの選択
    $db_selected = mysql_select_db('testdb',$link);
    //SQL文の発行
    $result = mysql_query('select * from test_table');
    //結果を連想配列に変換
    $row = mysql_fetch_assoc($result);
    //表示
    var_dump($row);
    //close処理
    $close_flag = mysql_close($link);
?>
