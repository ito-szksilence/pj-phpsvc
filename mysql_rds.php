<?php
    //mysqlに接続
    $link = mysql_connect('test-db-ito-ma.ceq7nsgnrdpj.ap-northeast-1.rds.amazonaws.com:3306','root','mi19745029');
    //DBの選択
    $db_selected = mysql_select_db('buyee',$link);
    //SQL文の発行
    $result = mysql_query('select * from information_schema.innodb_trx');
    //結果を連想配列に変換
    $row = mysql_fetch_assoc($result);
    //表示
    var_dump($row);
    echo "<br>";
    //SQL▒~V~G▒~A▒▒~Y▒▒▒~L
    $result = mysql_query('show full processlist');
    //▒▒~P▒~^~\▒~B~R▒~@▒▒~C▒▒~E~M▒~H~W▒~A▒▒▒~I▒~O~[
    while ($row = mysql_fetch_assoc($result)) {
    //表示
        var_dump($row);
        echo "<br>";
    }
    //close処理
    $close_flag = mysql_close($link);
?>
