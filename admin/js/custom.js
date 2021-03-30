$(document).ready(function () {
$('.checking_email').keyup(function (e) {
    var email = $('.checking_email').val();

    $.ajax({
        type:"POST",
        url:"techniciancode.php",
    data: {
        "check_submit_btn": 1,
        "email_id": email,
    },
    success: function (response) {
    //alert(response);
        $('.error_email').text(response);
    }
    })
})
})
$(document).ready(function () {
$('.checking_phone').keyup(function (e) {
    var phone = $('.checking_phone').val();

    $.ajax({
        type:"POST",
        url:"techniciancode.php",
    data: {
        "check_submit": 1,
        "phone_id": phone,
    },
    success: function (response) {
    //alert(response);
        $('.error_phone').text(response);
    }
    })
})
})
