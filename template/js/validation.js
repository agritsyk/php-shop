$(document).ready(function () {
    var inputEmail = $('#inputEmail');
    var inputPassword = $('#inputPassword');
    var inputLogin = $('#inputLogin');
    inputEmail.after('<p id="emailInfo" class="info"></p>');
    inputPassword.after('<p id="passwordInfo" class="info"></p>');
    inputLogin.after('<p id="loginInfo" class="info"></p>');
    var jVal = {
        'inputEmail': function () {
            var emailInfo = $('#emailInfo');
            if (inputEmail.val().length < 3) {
                jVal.errors = true;
                emailInfo.addClass('error').html("Email must be at least 5 characters").show();
                inputEmail.css('border', '2px solid #ff0905');
            } else {
                var pattern = /^^\S+@\S+\.\S+$/;
                if (!(pattern.test(inputEmail.val()))) {
                    emailInfo.addClass('error').html("Please, enter correct email").show();
                    inputEmail.css('border', '2px solid #ff0905');
                } else {
                    emailInfo.removeClass('error').hide();
                    inputEmail.css('border', '2px solid #11A04D');
                }
            }
        },
        'inputPassword': function () {
            var passwordInfo = $('#passwordInfo');
            if (inputPassword.val().length < 4){
                jVal.errors = true;
                passwordInfo.addClass('error').html('password must be at least 4 characters').show();
                inputPassword.css('border', '2px solid #ff0905');
            } else {
                passwordInfo.removeClass('error').hide();
                inputPassword.css('border', '2px solid #11A04D');
            }
        },
        'inputLogin': function () {
            var loginInfo = $('#loginInfo');
            if (inputLogin.val().length < 3){
                jVal.errors = true;
                loginInfo.addClass('error').html('login must be at least 3 characters').show();
                inputLogin.css('border', '2px solid #ff0905');
            } else {
                loginInfo.removeClass('error').hide();
                inputLogin.css('border', '2px solid #11A04D');
            }
        }
    }
    inputEmail.change(jVal.inputEmail);
    inputPassword.change(jVal.inputPassword);
    inputLogin.change(jVal.inputLogin);
});