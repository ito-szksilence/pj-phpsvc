<?php
    //mysql�ɐڑ�
    $link = mysql_connect('localhost','root','Mi19745029_');
    //DB�̑I��
    $db_selected = mysql_select_db('testdb',$link);
    //SQL���̔��s
    $result = mysql_query('select * from test_table');
    //���ʂ�A�z�z��ɕϊ�
    $row = mysql_fetch_assoc($result);
    //�\��
    var_dump($row);
    //close����
    $close_flag = mysql_close($link);
?>
