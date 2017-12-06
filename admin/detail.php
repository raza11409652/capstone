<?php 
    include_once "admin/includes/header.php";
    $email=$_GET['key'];
    $email=mysql_real_escape_string($email); 
    $sql="select *from user where user_email='$email'";
    $res= mysql_query($sql);
    $count=mysql_num_rows($res);
    $sql_query="select * from services ";
    $res_query=mysql_query($sql_query);
    //var_dump($res_query);
  if($count==1)
  {
    $data=mysql_fetch_array($res);
   // var_dump($data);
    $name=$data['user_first_nane']." ".$data['user_last_nane'];
    $mobile=$data['user_phone'];
    $adhar=$data['user_adhar'];
    $pan=$data['user_pan'];
    $id=$data['id'];
  }
  //fetch image
  $sqlImage="select * from user_image where id ='$id'";
  $resImage=mysql_query($sqlImage);
  $dataImage=mysql_fetch_array($resImage);
  $panCard=$dataImage['pan'];
  $adharCard=$dataImage['adhar'];
  $sign=$dataImage['sign'];
  $image=$dataImage['image'];
?>
<div class="container">

    <div class="row">
    <div class="col-lg-4">
    <img src="<?php echo $image ;?>" class="img-responsive">
    </div>
    <div class="col-lg-8">
    <b><?php 
        echo "Name :".$name."<br>";
        echo "Adhar Card Number :" .$adhar."<br>";
        echo "Pan Card Number :" .$pan."<br>";
        echo "Mobile Number :" .$mobile."<br>";
        echo "Email :" .$email."<br>";
      
    ?></b>
    </div>
    </div>
    <div class="row">

    <div class="col-lg-4">
  <div class="panel panel-success">
      <div class="panel-heading">Pan Card</div>
      <div class="panel-body">
      <a href="<?php echo $panCard; ?>" target="_blank"><img src="<?php echo $panCard; ?>" class="img-responsive"></a>
      </div>
  </div>
</div>
    <div class="col-lg-4">
        <div class="panel panel-warning">
            <div class="panel-heading">Adhar card</div>
            <div class="panel-body">
        <a href="<?php echo $adharCard; ?>" target="_blank"><img src="<?php echo $adharCard; ?>" class="img-responsive"></a>
                
            </div>
        </div>
        </div>
        <div class="col-lg-4">
        <div class="panel panel-warning">
            <div class="panel-heading">Sign</div>
            <div class="panel-body">
        <a href="<?php echo $sign; ?>" target="_blank"><img src="<?php echo $sign; ?>" class="img-responsive"></a>
                
            </div>
        </div>
        </div>
    </div>
</div>
<?php
    include_once "admin/includes/footer.php"; 
?>