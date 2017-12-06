<?php
require_once "../../controller/Config.php";
$handler=new Config();

if(isset($_POST))
{
  @ $email=$_POST['email'];
   $email=mysql_real_escape_string($email);
  @ $password=$_POST['password'];
  $password=md5($password);
    $sql_login="select * from adminlogin where email='$email' && password='$password'";
    $res=mysql_query($sql_login);
    $count_login=mysql_num_rows($res);
    if($count_login==1)
    {
        $data=mysql_fetch_assoc($res);
        $fecthed_email=$data['email'];
        $fecthed_password=$data['password'];
        if($email == $fecthed_email && $password == $fecthed_password)
        {
            echo "1"; #valid login
            //start session for admin

        }

        else{
            echo "0"; #login failed
        }
    }else{
        echo "-1" ; #wrong combination of email and password
    }
} 
?>