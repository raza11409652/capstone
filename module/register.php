<?php
    include_once "../controller/Config.php";
    session_start();
    $handler=new Config();
    if(isset($_POST))
    {
        $tableName="user";
        $id=$handler->getId($tableName);
        //echo $id;
        $firstName=mysql_real_escape_string($_POST['firstName']);
        $lastName=mysql_real_escape_string($_POST['lastName']);
        $email=$_POST['email'];
       $mobile=$_POST['mobile'];
       $password=md5($_POST['password']);
      $confirmPassword=md5($_POST['confirmPassword']);
      $panCard=$_POST['panCard'];
      $adhar=$_POST['adharCard'];
     if($password == $confirmPassword )
     {
         $sql="Insert into user values ('$id','$email','$firstName','$lastName','$mobile','$adhar','$panCard')";
       // echo $sql;
         $res=mysql_query($sql);
        if($res)
        {   $id_max=$handler->getId('user_login');

            $sql_insert_pass="insert into user_login values('$id_max','$password','$id')";
            //echo $sql_insert_pass;
            $_SESSION['currentRegisterUserEmail']=$email;
            $_SESSION['currentRegisterUSerAdhar']=$adhar;
            $res_insert=mysql_query($sql_insert_pass);
            if($res_insert)
            {
                echo "1";
            }
                }
     }


    }
?>
