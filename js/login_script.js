// Credit: https://stackoverflow.com/

$(document).ready(function() {
        var $submitBtn = $("#login_form input[type='submit']");
        var $passwordBox = $("#password");
        var $errorMsg =  $('<span id="error_msg">Password is incorrect.</span>');
        var $notify = $("alert('Password is incorrect.');");

        // This is incase the user hits refresh - some browsers will maintain the disabled state of the button.
        // $submitBtn.removeAttr("disabled");

        function checkCorrectPassword() {
            if($passwordBox.val() != "") {
                if($notify) {
                    // $submitBtn.attr("disabled", "disabled");
                    $errorMsg.insertAfter($passwordBox);
                }
            }
        }

        function resetPasswordError() {
            // $submitBtn.removeAttr("disabled");
            var $errorCont = $("#error_msg");
            if($errorCont.length > 0){
                $errorCont.remove();
            }
        }


        $("#password")
             .on("keydown", function(e) {
                /* only check when the tab or enter keys are pressed
                 * to prevent the method from being called needlessly  */
                if(e.keyCode == 13 || e.keyCode == 9) {
                    checkCorrectPassword();
                }
             })
             .on("blur", function() {
                // also check when the element looses focus (clicks somewhere else)
                checkCorrectPassword();
            })
            .on("focus", function() {
                // reset the error message when they go to make a change
                resetPasswordError();
            })

    });
