<?php
    mysql_connect("localhost","root","") or die("error connect");
    mysql_select_db("GameZone") or die("error database");
    $email=$_POST["E"];
    $pass=$_POST["P"];
    $res=mysql_query("SELECT * FROM game WHERE Email='$email' AND Password='$pass'");
    if(mysql_num_rows($res)>0){
        header('Location: ../index.html');
    }
    else{
        echo "<script>alert('verify or Register Now')</script>";
    }
?>