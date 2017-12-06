<?php 
include_once "admin/includes/header.php"; 
@$key=$_POST['searchBox'];
//echo $key;    
    $sql="select user_email as email  from user where user_email like '$key%' ";
    //echo $sql;
    $res=mysql_query($sql);
    //$data=mysql_fetch_array($res);
    echo "<ul class='list-group'>";
   while($data=mysql_fetch_array($res))
   {
    echo "<li class='list-group-item'><a href='?admin=detail&key=".$data['email']."'>".$data['email']."</a></li>";
   }
   echo "</ul>";
?>
    
<?php
include_once "admin/includes/footer.php"; 
?>