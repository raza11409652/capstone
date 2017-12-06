<?php
session_start();
//unset($_SESSION['currentLoggedInUser']);
//unset( $_SESSION['loggedInStatus']);
session_destroy();

header("Location: ./");
exit; 
?>