<?php
define('user','root');
define('host','localhost');
define('password','');
define('dbName','capstone'); 
class Config{
    function __construct(){
        $conn=mysql_connect(host,user,password);
        mysql_select_db(dbName,$conn);
        if(!$conn)
        {
            echo "Error in connectivity".mysql_error();
        }
    }
   function getId($tableName)
   {
       $sql="select max(id) as maxId from $tableName";
       //echo $sql;
       $res=mysql_query($sql);
        $data=mysql_fetch_assoc($res);
        $id=$data['maxId']+1;
        return $id;
   }
    function redirect($url){
       
        ob_start();
        header("Location: ".$url);
        ob_end_flush();
    
    }
    
}
?>