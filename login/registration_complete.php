<?php

// ȸ������(registration.html) ���� �����ϸ� --�� ȸ�������� �Ϸ�Ǿ����ϴ�.  â ����ִ� ������

    $database = "warehouse";

    $connect=mysql_connect('localhost', 'lcw', 'chaewon')  
    or die("mySQL ���� ���� Error!");

    mysql_select_db($database, $connect);

    $query = "select * from outsrc_tb";

    $result= mysql_query($query, $connect);

    print "<center><font color=blue size=5><b>ȸ�������� �Ϸ�Ǿ����ϴ�. </b></font></center>";

    print "<table align='center'><tr>
    <td align=center><font color=black><a href='../index.html'>
    ����ȭ������ ����</a></font></td></tr></table></BODY></HTML>";
   

    mysql_close($connect);

    ?>

