<?php
    $database="warehouse";
    $connect= mysql_connect('localhost','lcw','chaewon') or die("mySQL ���� ���� Error!");

    mysql_select_db($database, $connect);

    $uid= $_POST["userid"];  
    $query= "SELECT * FROM outsrc_tb where outsrc_no= '$uid'";
    
    //$result = mysql_query($query, $connect); 
    $result = mysql_query($query, $connect);
    //$num= mysql_num_rows($result);
    $num=mysql_num_rows($result);


    print $num;

    if(!$num){  
        echo "<span style='color:red;'></span> ��밡���մϴ�.";
       ?>
       
       <p><input type=button value="�� ����ڹ�ȣ�� ���" onclick="opener.parent.decide(); window.close();"></p>
        
    <?php
    }
     else {    

        echo "<span style='color:blue;'></span> ���Ұ��մϴ�.";
        ?><p><input type=button value="�ٸ� ����ڹ�ȣ�� ���" onclick="opener.parent.change(); window.close()"></p>
    <?php
    }

   // $outsrc_no = $_POST['decide_id'];   
   //decide_id�� outsrc_no(����ڹ�ȣ)�� �Ѱ��� 
?>

