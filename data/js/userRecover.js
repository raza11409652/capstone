$(document).ready(function(event) {
    $('#passwordRecoverForm').submit(function(e) {
        e.preventDefault();
        var adhar = $('#adhar').val();
        //alert(adhar);
        var data = $('#passwordRecoverForm').serialize();
        //alert(data);
        if (adhar.match(/^\d+$/)) {
            if (adhar.length == 12) {
                $.ajax({
                    type: 'POST',
                    url: './module/passwordRecovery.php',
                    data: data,
                    beforeSend: function() {

                    },
                    success: function(response) {
                        if (response == 1) {
                            window.location.replace('?user=passwordReset');
                        } else if (response == 0) {
                            alert('credantial not matched');
                        }
                    }
                });
            } else {
                alert('length must be of 12');
            }
        } else {
            alert('adhar card not valid');
        }
    });
})