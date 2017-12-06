$(document).ready(function() {
    $(".button-collapse").sideNav();
    $('.modal').modal();
    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15, // Creates a dropdown of 15 years to control year,
        today: 'Today',
        clear: 'Clear',
        close: 'Ok',
        closeOnSelect: true // Close upon selecting a date,
    });

    $('#serviceSelector').on('change', function() {
        var data = this.value;
        //alert(data);
        $.ajax({
            type: 'GET',
            data: "id=" + data,
            url: './module/fetchRequiredDocument.php',
            beforSend: function() {

            },
            success: function(response) {
                $('#listOfDocument').html(response);
            }
        })
    });
    $('#servicesApply').submit(function(e) {
        e.preventDefault();
        var data = $('#servicesApply').serialize();
        alert(data);
        $.ajax({
            type: 'POST',
            data: data,
            url: './module/postRequest.php',
            beforSend: function() {

            },
            success: function(response) {
                if (response == 1) {
                    $('#modal1').modal('close');
                    alert('Appointemnt Fixed');
                } else if (response == 0) {
                    alert('Error ');
                } else if (response == "-1") {
                    alert('selected time span is not Free');
                }
            }
        })
    });
    $('#passwordResetForm').submit(function(e) {
        e.preventDefault();
        var value = $('#passwordResetForm').serialize();
        var password = $('#pass').val();
        var confirmPassword = $('#conPass').val();
        if (password == confirmPassword) {
            $.ajax({
                type: 'POST',
                data: value,
                url: './module/reset.php',
                beforSend: function() {

                },
                success: function(response) {
                    if (response == 1) {
                        alert('Password has been changed');
                        window.location.replace('?view=loginUser');
                    } else if (response == -1) {
                        alert('Password not match');
                    }
                }
            });
        } else {
            alert('password and Confirm Password not match');
        }
    });

});