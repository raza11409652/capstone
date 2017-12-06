<?php
include_once "../controller/Config.php";
session_start();
$handler=new Config();
$id=$handler->getId('user_request');
if(isset($_POST))
{
    $currentUser=$_SESSION['currentLoggedInUser'];
    //echo $currentUser;
    /**
     * user id fetch
         */
     $sql_user="select id from user where user_email='$currentUser'";
     $res=mysql_query($sql_user);
     $data=mysql_fetch_array($res);
     $user_id=$data['id'];
     //echo $user_id; 
    $date=$_POST['date'];
    $time=$_POST['time'];
    $service=$_POST['service'];
   // echo $date.$time.$service ;
   /**check for free time */
   $sql_check="select * from user_request where appointment='$date' && request_time='$time'";
   $res=mysql_query($sql_check);
   $countR=mysql_num_rows($res);
   if($countR==1)
   {
       echo "-1";
   }
   else{
    $sql="insert into user_request values ('$id','$service','$user_id','$date','$time')";
    // echo $sql;
    $res=mysql_query($sql);
    if($res)
    {
        
        echo "1";
    }
    else{
        echo 0;
    }
   }
   
}

?>