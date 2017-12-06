<?php
session_start();
function checkFileExist($urlPath){
    if(file_exists($urlPath))
    {
        require_once $urlPath;
    }
    else{
        require_once "view/home.php";
    }
}

if(isset($_REQUEST['view']))
{
    $url=$_REQUEST['view'];
    $urlPath="view/".$url.".php";
    checkFileExist($urlPath);
}
elseif(isset($_REQUEST['admin']))
{
    $url=$_REQUEST['admin'];
    $urlPath="admin/".$url.".php";
    checkFileExist($urlPath);
}
elseif(isset($_REQUEST['user']))
{
    $url=$_REQUEST['user'];
    $urlPath="user/".$url.".php";
    checkFileExist($urlPath);
}
else
{
    require_once "view/home.php";
}
?>