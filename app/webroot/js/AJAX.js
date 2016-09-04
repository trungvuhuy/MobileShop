$(document).ready(function() {
	$("#SendMail").click(function() {
		var name = $("#name").val();
		var pass = $("#pass").val();
		var captcha = $("#captcha").val();
		var email_regex = /^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;
		var data_string = 'name=' + name + '&pass=' + pass + '&captcha=' + captcha; 
		
		if(name == "") {
           $("#nameError").slideDown('slow').delay(1000).slideUp('slow');
           $("#name").focus();
           return false;
        }

        if(pass == "") {
           $("#passError").slideDown('slow').delay(1000).slideUp('slow');
           $("#pass").focus()
           return false;
        }

        if(captcha == "") {
           $("#captchaError").slideDown('slow').delay(1000).slideUp('slow');
           $("#captcha").focus()
           return false;
        }

        $("#loading").html("<img src='images/loading.gif'/>").fadeIn('fast');
            $.ajax({
                type: "POST",
                url: "insert.php",
                data: data_string,
                success: function(data_form) {
                    if(data_form == "true") {
                        $('#loading').fadeOut('fast');
                        $("#success").slideDown('slow').delay(3000).slideUp('slow');
                            clear_form();
                            change_captcha();
                    } else {
                        $('#loading').fadeOut('fast');
                        $("#error").slideDown('slow').delay(3000).slideUp('slow');
                        }
                    }
                });
        return false;

	});

	function clear_form() {
        $("#name").val('');
        $("#pass").val('');
        $("#captcha").val('');
    }

    $("#load_captcha").click(function() {
        change_captcha();
    });

    function change_captcha() {
        document.getElementById('img_captcha').src="/members/captcha.php?rnd=" + Math.random();
    }
});