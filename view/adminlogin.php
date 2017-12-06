<?php
    include_once "admin/includes/requirecss.php";
?>
<div class="container margin-top-default">
   <form id="adminLoginForm" action="#" method="post">
   <div class="login-container card">
        <div class="logo-container"><img src="image/logo.jpg" class="logo"></div>
        <div class="form-group">
                    <input type="email" id="email" class="form-control" placeholder="Email" name="email" required>
        </div>
        <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" name="password" required>
        </div>
        <div class="form-group" id="btn-container">
            <button class="btn btn-danger">Login</button>
            <center><img src="image/loading.gif" class="loader hide "></center>
        </div>
    </div>
   </form>
</div>
<?php
    include_once "admin/includes/footer.php";
?>