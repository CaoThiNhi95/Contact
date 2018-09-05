$(document).ready(function(){
    $('#signup-form').validate({
        focusCleanup: true,
        rules: {
            email: {
                required: true,
                maxlength: 50,
                email: true,
                validateEmail: true
            },
            password: {
                required: true,
                maxlength: 30,
                minlength: 8
            }
        },
        messages: {
            email: {
                required: "このフィールドは必須です。",
                maxlength: $.validator.format( "{0} 文字以内で入力してください。" ),
                email: "有効なEメールアドレスを入力してください。",
                validateEmail: "有効なEメールアドレスを入力してください",
            },
            password: {
                required: "このフィールドは必須です。",
                maxlength: $.validator.format( "{0} 文字以内で入力してください。" ),
                minlength: $.validator.format("{0} 文字以上で入力してください。")
            }
        }
    });
    var validator = $( "#signup-form" ).validate();

    $.validator.addMethod("validateEmail", function(value){
        var exp_special = /[\$,\！,\＃,\＄,\％,\＾,\＆,\＊,\（,\）,\ー,\＝,\＋,\？,\＜,\＞,\・,\!,\#,\%,\^,\&,\*,\(,\),\<,\>,\+,\=,\?]/ ;
        var exp_dotcom = /.*\..*/
        if(!exp_special.test(value) && exp_dotcom.test(value)){
            return true 
        }
        else {
            return false;
        } 
    });
    $("#email").blur(function (e) { 
        e.preventDefault();
        var mail = $('#email').val();
        if(validator.element('#email')){
            $.get("check_email_exist.php",{mail: mail}, function(data){
                if (data === "yes"){
                    $('#check-mail').html("このEメールアドレスが存在しました！");
                    $('#check-mail').css("color", "red");
                    $('#submit-signup').attr("disabled", true);
                }
                else {
                    $('#check-mail').html("このEメールアドレスはいいです！");
                    $('#check-mail').css("color", "green");
                    $('#submit-signup').attr("disabled", false);
                }
            })
        }        
    });
})