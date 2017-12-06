<?php
include_once "../controller/Config.php";
session_start();
$handler=new Config();
    if(isset($_POST))
    {
        $user=$_SESSION['currentUserEmail'];
        $sql="select * from user where user_email='$user'";
        $res=mysql_query($sql);
        $count=mysql_num_rows($res);
        if($count==1)
        {
            $data=mysql_fetch_array($res);
            $id=$data['id'];
        }
        $pass=$_POST['password'];
        $confirmPass=$_POST['conPassword'];
        $pass=md5($pass);
        $confirmPass=md5($confirmPass);
        if($pass == $confirmPass)
        {
            //set new Password
            $sql="update  user_login set user_password='$pass' where user_ref_id='$id'";
            //echo $sql;
            $res_sql=mysql_query($sql);
            if($res_sql)
            {
                echo 1; //password reset
            }
        }
        else {
            echo -1;// password not match
        }

    }
?>