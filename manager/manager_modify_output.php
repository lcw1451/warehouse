<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<nav>
  <a href="manager_stock.html">재고</a>
  <a href="manager_out_bound.php">출고</a>
  <a href="manager_in_bound.php">입고</a>
  <a href="manager_membership.php">회원관리</a>
  <a href=""></a>
</nav>
<main>
  <h1>관리자</h1>
  <h2>회원관리</h2>
  
</main>
<footer>footer</footer>
</body>
</html>



<?php

    $database="warehouse";
    $connect= mysql_connect('localhost','lcw','chaewon') or die("mySQL 서버 연결 Error!");

    mysql_select_db($database, $connect);
    $query= "SELECT * FROM outsrc";
    $result = mysql_query($query, $connect);
   
   

    print "<center><font color=blue size=5><b>삭제 결과 </b></font></center>";
    print "<table border=1 align=center>";
  
   
    print "<tr><td> 업체명</td><td>전화번호 </td><td> 사업자번호</td><td>비밀번호</td></tr>";


    $num=mysql_num_rows($result);
    for($i=0; $i<$num; $i++) {
        $ans= mysql_fetch_row($result);
        print "<tr><td>".$ans[2]."</td><td>".$ans[1]."</td><td>".$ans[0];
        print "</td><td>".$ans[3]."</td></tr><br>";
    }

    print "</table>";

    mysql_close($connect);
    ?>
