<?php
    mysql_connect("localhost","root","") or die("error connect");
    mysql_select_db("GameZone") or die("error database");
    $cin=$_POST["C"];
    $name=$_POST["N"];
    $email=$_POST["E"];
    $pass=$_POST["P"];
    $Cpass=$_POST["CP"];
    $res=mysql_query("SELECT * FROM game WHERE Cin='$cin' and Email='$email'");
    if(mysql_num_rows($res)>0){
        echo "<script>alert('Compte already exist')</script>";
    }
    else{
        $res2=mysql_query("INSERT into game values('$cin','$name','$email','$pass','$Cpass')");
        if($res2){
            echo "<script>alert('Inscription Successful');window.location='index.html';</script>";
        }
        else{
            echo "<script>alert('verify')</script>";
        }
    }
?>