$(document).ready(function() {
    $('#registerForm').submit(function(e) {
        e.preventDefault();
        var data = $('#registerForm').serialize();
        var pan = $('#panCard').val();
        var adhar = $('#adhar').val();
        var mobile = $('#mobile').val();
        var password = $('#password').val();
        var confPassword = $('#con_pass').val();
        if (pan == "" || pan == null) {
            alert('Pan card required');
        } else if (pan.length != 12) {
            alert('pan card lenght missing');
        } else if (adhar == "" || adhar == null) {
            alert('adhar is required');
        } else if (adhar.match(/^\d+$/)) {
            if (adhar.length == 12) {
                if (mobile.match() && mobile.length == 10) {
                    if (password == confPassword) {
                        //submit data
                        $.ajax({
                            type: 'POST',
                            data: data,
                            url: './module/register.php',
                            beforeSend: function() {

                            },
                            success: function(response) {
                                if (response == 1) {
                                    localStorage.setItem('registerCurrentUSer', mobile);
                                    window.location.replace('?view=registerUser&step=2');
                                } else {
                                    alert('Error in processing');
                                }
                            }
                        });
                    } else {
                        alert('Password not matched');
                    }
                } else {
                    alert('mobile is not valid');
                }
            } else {
                alert('adhar card must be of 12 digit');
            }
        } else {
            alert('adhar card not valid');
        }

    });
});