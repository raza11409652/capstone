<?php 
include_once "../controller/Config.php";
session_start();
$handler=new Config();
$id=$_GET['id'];
$sql_query="select * from requireddocument where ref_id='$id'";
//echo $sql_query;
$res=mysql_query($sql_query);
echo "<div class='w3-container teal'>Required Hard Copy Of Document</div><ul class='collection'>";
while($data=mysql_fetch_assoc($res)){
    echo "<li class='collection-item'>".$data['document']."</li>";
}
echo "</ul>";
?>