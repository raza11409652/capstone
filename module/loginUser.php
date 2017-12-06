<?php
include_once "../controller/Config.php";
session_start();
$handler=new Config();
    if(isset($_POST))
    {
      //  echo $_POST['loginEmail'];
      $loginEmail=$_POST['loginEmail'];
      $loginEmail=mysql_real_escape_string($loginEmail);
      $loginPassword=$_POST['loginPassword'];
      $loginPassword=md5($loginPassword);
      //check whether user Exist with this Email or not
        $sqlCheckUSer="select * from user where user_email='$loginEmail'";
        $resCheckUser=mysql_query($sqlCheckUSer);
        $count=mysql_num_rows($resCheckUser);
        if($count==1)
        {
            $data=mysql_fetch_array($resCheckUser);
            $id=$data['id'];
           // echo $id;
           $sqlCheckPassword="select * from user_login where user_password='$loginPassword' && user_ref_id='$id'";
           $resLogin=mysql_query($sqlCheckPassword);
           $countLogin=mysql_num_rows($resLogin);
           if($countLogin==1)
           {
                /**
                 * Start session for login as user is now login Successfully
                 * 
                 */
                $_SESSION['currentLoggedInUser']=$loginEmail;
                $_SESSION['loggedInStatus']=true;
               echo "1";    // login success
           }else {
               echo "-2"; //login fialed bcs of credential mismatch
           }

        }else{
            echo "-1"; // -1 means user is not registered 
        }
    }
?>