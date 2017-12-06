$(document).ready(function() {
    // alert("hello");
    $('#loginForm').submit(function(event) {
        event.preventDefault();
        var data = $('#loginForm').serialize();
        // alert(data);
        var email = $('#loginEmail').val();
        var password = $('#loginPassword').val();
        if (email == "" || email == null) {
            alert('Email is required');
            $('#loginEmail').focus();
            return false;
        } else if (password == "" || password == null) {
            alert('Password is Required');
            $('#loginPassword').focus();
            return false;
        } else {
            $.ajax({
                type: 'POST',
                data: data,
                url: './module/loginUser.php',
                beforeSend: function() {

                },
                success: function(response) {
                    if (response == 1) {
                        localStorage.setItem('loginCurrentUSer', email);
                        window.location.replace('?user=home');
                    } else if (response == -2) {
                        alert('wrong combination of credential');
                    } else if (response == -1) {
                        alert('user is not registerd');
                    }
                }
            })
        }
    });
});