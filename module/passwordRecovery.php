<?php
include_once "../controller/Config.php";
session_start();
$handler=new Config();
if(isset($_POST))
{
    $email=$_POST['email'];
    $adhar=$_POST['adhar'];
    //echo $email .$adhar;
    $sql="select * from user where user_email='$email' && user_adhar='$adhar';";
    //echo $sql;
    $res=mysql_query($sql);
    $count=mysql_num_rows($res);
    if($count==1)
    {
        echo 1; //go to reset Password
        $_SESSION['currentUserEmail']=$email;
        $_SESSION['currentUserAdhar']=$adhar;
    }
    else{
        echo 0;
    }
} 
?>