<?php
include_once "admin/includes/header.php"; 
?>
    <div class="container">
        <div class="panel panel-danger">
            <div class="panel-heading">Change your Password</div>
            <div class="panel-body">
                <div class="form-group margin-top-default">
                    <input type="password" class="form-control" placeholder="Your Current Password">
                </div>
                <div class="form-group margin-top-default">
                    <input type="password" class="form-control" placeholder="New Password">
                </div>
                <div class="form-group margin-top-default">
                    <input type="password" class="form-control" placeholder="Confirm New Password">
                </div>
                <div class="form-group">
                    <button class="btn btn-success">Submit</button>
                </div>
            </div>
        </div>
    </div>
<?php
include_once "admin/includes/footer.php"; 
?>