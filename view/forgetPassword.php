<?php
include_once "includes/header.php"; 
?>
<div class="container">
    <div class="card w3-padding">
    <div class="center">
        <h3>Recover Your Account</h3>

    </div><hr>
    <form id="passwordRecoverForm" method="POST" action="#">
    <div class="input-field">
        <input type="email" class="validate" name="email" required>
        <label>Email</label>
    </div>
    <div class="input-field">
        <input type="tel" class="validate" name="adhar" id="adhar" required>
        <label>Adhar Card</label>
    </div>
    <div class="center">
        <button class="btn red" type="submit">Recover</button>
    </form>
        <a href="?view=loginUser" class="btn green">Login</a>
    </div>
    </div>
</div>
<?php
include_once "includes/footer.php"; 
?>