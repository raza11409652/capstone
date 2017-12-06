<?php
include_once "includes/header.php"; 
$user=$_SESSION['currentLoggedInUser'];
if(isset($_POST['change']))
{
    $sql="select * from user where user_email='$user'";
    $res=mysql_query($sql);
    $count=mysql_num_rows($res);
    if($count==1)
    {
        $data=mysql_fetch_array($res);
        $id=$data['id'];
    }
    $pass=$_POST['password'];
    $confirmPassword=$_POST['confirmPassword'];
    $pass=md5($pass);
    $confirmPassword=md5($confirmPassword);
    if($pass==$confirmPassword)
    {
        $sql="update  user_login set user_password='$pass' where user_ref_id='$id'";
        //echo $sql;
        $res_sql=mysql_query($sql);
        if($res_sql)
        {
           $succ="Password SuccessFully Reset";
                }
    }
    else{
        $err="Password not Matched";
    }
}
?>
<div class="container">
    <?php
    if(!empty($err))
    {
        echo $err;
    } 
    else if(!empty($succ)){
        echo $succ;
      session_start();
        //sleep(30);
        unset($_SESSION['currentLoggedInUser']);
        unset( $_SESSION['loggedInStatus']);
        session_destroy();
        
        header("Location: ./");
        exit; 
    }
    ?>
    <div class="card w3-padding">
    <div class="center">
        <h3>Change  Your Password</h3>

    </div><hr>
    <form method="POST" action="#">
    <div class="input-field">
        <input type="password" class="validate" name="password">
        <label>Current Password</label>
    </div>
    <div class="input-field">
        <input type="password" class="validate" name="confirmPassword">
        <label>New Password</label>
    </div>
    <div class="center">
        <button class="btn red" type="submit" name='change'>Change</button> 
    </div>
    </form>
    </div>
</div>
<?php

include_once "includes/footer.php"; 
?>