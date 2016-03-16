/**
 * Created by asimcraft on 1/24/15.
 */
$(function() {
    $(".btn-submit").click(function() {
        // validate and process form here
        var firstname = $("input#firstname").val();
        var email = $("input#email").val();
        var comment = $("#comment").val();
        var service = $("#service").val();
        var phone = $("#phone").val();
        var location = $("#location").val();

        var dataString = 'firstname='+ firstname + '&email=' + email + '&comment=' + comment + '&service=' + service + '&phone=' + phone + '&location=' + location;

        if(firstname == "" && email == ""){
                $("#error").append("<p>Please fill out required Name and Email fields</p>");
        }else{
            $.ajax({
                type: "POST",
                url: "../../contactform.php",
                data: dataString,
                success: function() {
                    $('.form').html("<div id='message'></div>");
                    $('#message').html("<h2>Submit Sent</h2>")
                        .append("<p>Thankyou for contacting Vector N Pixel, we will get back with you shortly</p>")
                        .hide()
                        .fadeIn(1500, function() {
                            $('#message');
                        });
                }
            });
        }


        return false;
    });
});