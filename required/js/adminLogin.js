$(document).ready(function() {
    //alert('hello');
    $('#adminLoginForm #email').focus();
    $('#adminLoginForm').submit(function(event) {
        event.preventDefault();
        var data = $('#adminLoginForm').serialize();
        $.ajax({
            type: 'POST',
            data: data,
            url: './admin/module/login.php',
            beforeSend: function() {
                $('#btn-container .btn').addClass('hide');
                $('#btn-container .loader').removeClass('hide');
            },
            success: function(response) {
                if (response == 1) {
                    //goto dashboard and store email for session
                    setTimeout(function() {
                        window.location.replace('?admin=home');
                    }, 500);
                } else {
                    swal({
                        title: "Login Failed",
                        text: "Email and Password combination wrong",
                        type: "warning",
                    });
                    $('#btn-container .loader').addClass('hide');
                    $('#btn-container .btn').removeClass('hide');
                }
            }
        });
    });
});