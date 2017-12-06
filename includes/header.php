<?php
  include_once "controller/Config.php";
  $handler=new Config();
  if(@$_SESSION['loggedInStatus']==true)
  {
    /**
     * fetch Id
     */
    $flag="hide";
    $logFlag="";
  }
  else{
    $flag=" ";
    $logFlag="hide";
  }
?>
<html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="data/css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" type="text/css" href="data/css/theme.css">
      <link rel="stylesheet" type="text/css" href="data/css/w3.css">
        <link rel="stylesheet" type="text/css" href="data/css/animate.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script type="text/javascript" src="data/js/jquery.min.js"></script>
    <title>3A & A</title>
    </head>
    
    <body>
      <nav>
    <div class="nav-wrapper w3-container">
      <a href="#!" class="brand-logo"> 
        <img src="image/logo.jpg" height="63px">
        </a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="index.php">HOME</a></li>
        <li><a href="index.php#about" >ABOUT</a></li>
       
        <li><a href="index.php#contact">Contact us</a></li>
        <li class="<?php echo $logFlag;?>"><a class='dropdown-button btn' href='#' data-activates='dropdown1'>Account</a></li>
        <ul id='dropdown1' class='dropdown-content'>
    <li><a href="?user=home">Account</a></li>
    <li><a href="?user=changePassword">Change Password</a></li>
    <li class="divider"></li> 
    <li><a href="?user=logout">logout</a></li>
   
  </ul>
        <li class="<?php echo $flag;?>"><a href="?view=loginUser">Login</a></li>
        <li class="<?php echo $flag;?>"><a href="?view=registerUser">Register</a></li>
      </ul>
      
    </div>
  </nav>
