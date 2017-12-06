<?php
    include_once "includes/header.php";
?>
    <div class="container">
   <form id="loginForm" method="post" action="#">
   <div class="card w3-padding">
            <div class="center">
                <h2>Sign in to <b>3A & A</b> User Account</h2>
            </div>
            <hr>
        <div class="input-field">
            <input type="email" class="validate" name="loginEmail" id="loginEmail">
            <label>Email</label>
        </div>
        <div class="input-field">
            <input type="password" class="validate" name="loginPassword" id="loginPassword">
            <label>
                Password</label>
        </div>
        <div class="center w3-padding">
            <a href="?view=forgetPassword" class="btn btn-flat">
                Recover Account
            </a>
        </div>
        <center><button class="btn btn-fab" type="submit">Login</button> 
        <a href="?view=registerUser" class="btn btn-flat">Register</a>
    </center>
    </div>
   </form>

</div>
<?php
    include_once "includes/footer.php";
?>