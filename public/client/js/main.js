
(function ($) {
    "use strict";

    
    /*==================================================================
    [ Validate ]*/
    var name = $('.validate-input input[name="name"]');
    var email = $('.validate-input input[name="email"]');
    var nationality = $('.validate-input input[name="nationality"]');
    var dob = $('.validate-input input[name="dob"]');
    var phone = $('.validate-input input[name="phone"]');
    var address = $('.validate-input textarea[name="address"]');
    
    $('.validate-form').on('submit',function(){
        var check = true;

        if($(name).val().trim() == ''){
            showValidate(name);
            check=false;
        }

        if($(nationality).val().trim() == ''){
            showValidate(nationality);
            check=false;
        }
        if($(address).val().trim() == ''){
            showValidate(address);
            check=false;
        }
        // var isvaliddate=isValidDate($(dob).val());
        // if(isvaliddate==false){
        //     showValidate(dob);
        //     check=false;
        // }


        if($(email).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
            showValidate(email);
            check=false;
        }

        // if($(message).val().trim() == ''){
        //     showValidate(message);
        //     check=false;
        // }
        var str = $(phone).val();
        var len = str.length;
        if($(phone).val().trim() == ''){
            showValidate(phone);
            check=false;
        }
        else{
            var str = $(phone).val();
            var len = str.length;
            if(len!=10){
                showValidate(phone);
                check=false;
            } 
        }

        return check;
    });




    $('.validate-form .input1').each(function(){
        $(this).focus(function(){
           hideValidate(this);
       });
    });

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    
    }
    // Validates that the input string is a valid date formatted as "mm/dd/yyyy"


  

    
    

})(jQuery);