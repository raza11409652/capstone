<?php
include_once "includes/header.php"; 
include_once "module/uploadImageUser.php";
@ $step=$_GET['step'];
$fileFlag="";
if($step== "" || $step ==null)
{
        $flag="";
        $temp="hide";
}
else if($step=="2")
{       $temp="";
        $flag="hide";
}

?>
<div class="container" id="registerPage">
<?php 
if(!empty($err))
{
 
  ?>
  <div class="w3-panel w3-red w3-display-container">
  <span onclick="this.parentElement.style.display='none'"
  class="w3-button w3-red w3-large w3-display-topright">&times;</span>
  <h3>Alert !!! </h3>
  <p><?php  echo   $err;?></p>
</div>
  <?php
}
else if(!empty($succ))
{
 // echo $succ;
  ?>

  <div class="w3-panel w3-green w3-display-container">
  <span onclick="this.parentElement.style.display='none'"
  class="w3-button w3-green w3-large w3-display-topright">&times;</span>
  <h3>Alert !!! </h3>
  <p><?php  echo   $succ; ?></p>
</div>
<?php 
  $fileFlag="disabled";
}
?>
   <form method="post" id="registerForm" action="#" class="<?php echo $flag; ?>">
   <div class="card w3-padding">
    <div class="teal w3-container  w3-padding">Create a new Account</div>
        <div class="row">
            <div class="col s6">
            <div class="input-field">
    <input id="first_name" required type="text" class="validate" name="firstName">
    <label for="first_name">First Name</label>
  </div>
            </div>
            <div class="col s6">
            <div class="input-field">
    <input id="last_name"  required type="text" class="validate" name="lastName">
    <label for="last_name">Last Name</label>
  </div>
            </div>
            <div class="col s6">
            <div class="input-field">
    <input id="panCard" type="text" class="validate" name="panCard">
    <label for="last_name">Pan Card Number</label>
  </div>
            </div>
            <div class="col s6">
            <div class="input-field">
    <input id="adhar" type="text" class="validate" name="adharCard">
    <label for="last_name">Adhar Card Number</label>
  </div>
            </div>
            <div class="col s6">
            <div class="input-field">
    <input id="email" required type="email" class="validate" name="email">
    <label for="last_name">Email</label>
  </div>
            </div>
            <div class="col s6">
            <div class="input-field">
    <input id="mobile" required type="tel" class="validate" name="mobile">
    <label for="last_name">Mobile Number</label></label>
  </div>
            </div>
            <div class="col s6">
            <div class="input-field">
    <input id="password" required type="password" class="validate" name="password">
    <label for="password">Password</label></label>
  </div>
            </div>
            <div class="col s6">
            <div class="input-field">
    <input id="con_pass" required type="password" class="validate" name="confirmPassword">
    <label for="con_pass">confirm Password</label></label>
  </div>
            </div>
        </div>
        <div class="row">
        <div  class="col s12">
            <button class="btn red" type="submit">Register</button>
            </div>
            </div>
    </div>
   </form>
</div>
<div class="container" id="uploadImage">

        <form class="<?php echo $temp; ?> card w3-padding" method="post" enctype="multipart/form-data" action ="#">
        <div class="w3-container teal">Upload Your Images</div>
                <div class="row">
                        <div class="col s12">
                        <div class="file-field input-field">
                        <div class="btn lighten-2">
                          <span>Adhar Card</span>
                          <input type="file" name="adhar" <?php echo $fileFlag; ?> >
                        </div>
                        <div class="file-path-wrapper">
                          <input class="file-path validate" type="text">
                        </div>
                      </div>
                        </div>
                        <div class="col s12">
                        <div class="file-field input-field">
                        <div class="btn lighten-2">
                          <span>Pan card</span>
                          <input type="file" name="pan" <?php echo $fileFlag; ?>>
                        </div>
                        <div class="file-path-wrapper">
                          <input class="file-path validate" type="text">
                        </div>
                      </div> 
                        </div>
                        <div class="col s12">
                        <div class="file-field input-field">
                        <div class="btn lighten-2">
                          <span>Signature</span>
                          <input type="file" name="sign" <?php echo $fileFlag; ?>>
                        </div>
                        <div class="file-path-wrapper">
                          <input class="file-path validate" type="text">
                        </div>
                      </div> 
                        </div>
                        <div class="col s12">
                        <div class="file-field input-field">
                        <div class="btn teal lighten-2">
                          <span>your Photo</span>
                          <input type="file" name="userImage" <?php echo $fileFlag; ?> >
                        </div>
                        <div class="file-path-wrapper">
                          <input class="file-path validate" type="text">
                        </div>
                      </div> 
                        </div>
                </div>
                <center><button class="btn orange" name="upload">Upload</button>
                <?php  if(!empty($succ)){
                  ?>
                  <a href="?user=home" class="btn green">Next</a>
                  <?php
                } ?>
                </center>
        </form>
</div>
<?php
include_once "includes/footer.php"; 
?>