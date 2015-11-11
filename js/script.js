$(document).ready(function () {

    $("#button").click(function () {
        
    });

    $("#button").hover(function () {
        $(this).stop().css({
           "cursor": "pointer"
        });
    });

    $("#signup_button").click(function(){


    });

    function validateFormCustomerSignUp(){
        var x = document.forms['customerSignUpForm']['customer_firstName'].value;
        if(x == null || x == ""){
            alert("First name must be filled out");
            return false;
        }
    }


});

  

