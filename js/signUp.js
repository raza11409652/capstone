$(document).ready(function() {
    $('#signupForm').submit(function(event) {
        event.preventDefault();
        var data = $('#signupForm').serialize();
        var adhar = $('#adhar').val();
        var mobile;
        var password;
        var confirmPasswor
        if (adhar.match(/^\d+$/)) {
            if (adhar.length == 12) {
                $.ajax({
                    type: "POST",
                    url: "./module/signup.php",
                    data: data,
                    beforeSend: function() {

                    },
                    success: function(response) {

                    }
                });
            } else {
                alert('Invalid Adhar Number');
            }

        } else {
            alert('adhar card number is not valid');
            ''
        }
    });
});