<?php
include_once "includes/header.php"; 
//echo $_SESSION['currentUserEmail']  ;
?>
<div class="container">
    <div class="card w3-padding">
    <div class="center">
        <h3>Reset Your Account</h3>

    </div><hr>
    <form id="passwordResetForm" method="POST" action="#">
    
    <div class="input-field">
        <input type="password" class="validate" name="password" id="pass" required>
        <label>Password</label>
    </div>
    <div class="input-field">
        <input type="password" class="validate" name="conPassword" id="conPass" required>
        <label>Confirm Password</label>
    </div>
    <div class="center">
        <button class="btn green" type="submit">Reset</button>
    </form>
       
    </div>
    </div>
</div>
<?php
include_once "includes/footer.php"; 
?>