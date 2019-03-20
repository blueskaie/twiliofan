
(function ($) {
    "use strict";
    var phonenumber = null;
    var verification_code = null;
    /*==================================================================
    [ Validate ]*/
    $('.codesec').hide();

    $('#login-btn').click(function(){
        var phoneinput =  $('#phone');
        var check = true;
        if(validate(phoneinput) == false){
            showValidate(phoneinput);
            check=false;
        } else {
            phonenumber = phoneinput.val();
            $.ajax({
                type:'POST',
                url:'/getcode',
                data:{'phonenumber': phonenumber},
                success:function(data){
                    console.log(data);
                   verification_code = data;         
                }
            });
            $('.loginsec').hide();
            $('.codesec').show();
        }
    });

    $('#code-btn').click(function(){
        var codeinput =  $('#code');
        var check = true;
        if(validate(codeinput) == false){
            showValidate(codeinput);
            check=false;
        } else if (verification_code == codeinput.val()){
            $.ajax({
                type:'POST',
                url:'/login',
                data:{'phonenumber': phonenumber},
                success:function(data){
                    window.location.href="/"
                }
            });
        } else {
            alert('invalid verification');
        }
    });

    $('.validate-form .input100').each(function(){
        $(this).focus(function(){
           hideValidate(this);
        });
    });

    function validate (input) {
        // if($(input).attr('name') == 'phonenumber') {
        //     if($(input).val().trim().match(/^[/+0-9]+$/) == null) {
        //         return false;
        //     }
        // } else if ($(input).attr('name') == 'code') {
        //     if($(input).val().trim().match(/^[0-9]+$/) == null) {
        //         return false;
        //     }
        // } else {
        //     if($(input).val().trim() == ''){
        //         return false;
        //     }
        // }
        if($(input).val().trim() == ''){
            return false;
        }
        return true;
    }

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }



})(jQuery);