$(document).ready(function() 
{

	//---------- subscribe button --------//
	$("#subbtn").click(function() 
	{

		var sbemail    = $("#subscribeEmail").val();

		if (sbemail == "" || sbemail == null) {

			$("#err").text("...Kindly input your email address");

		} else {

			$.ajax
    (
    {
        type        :  'post',
        url         :  'functions/init.php',
        data        :  {sbemail:sbemail},
        success     :  function(data)
        {
            $('#err').text(data);
        }
    }
        )
		}

})


	//----------- signup next signup ------------//
	$("#nxtSign").click(function() 
	{

		var fname    = $("#fname").val(); 
		var email    = $("#email").val();
		var usname   = $("#usname").val();
		var pword    = $("#pword").val();
		var cpword   = $("#cpword").val();
		var tel		 = $("#tel").val();
		var msgr     = $("#msgr").val();

		if (fname == "" || fname == null) {

			$('#msg').html("Kindly input your full name");
		} else {

		if (email == "" || email == null) {

			$('#msg').html("Kindly input your email address");
		}else {

		if (usname == "" || usname == null) {

			$('#msg').html("Kindly create a username");
		} else {

		if (pword == "" || pword == null) {

			$('#msg').html("Your password cannot be empty");
		}else {

		if (cpword == "" || cpword == null) {

			$('#msg').html("Kindly retype your password");
		}else {

		if (pword != cpword) {

			$('#msg').html("Your password does not match");
		} else {

		if (tel == "" || tel == null) {

			$('#msg').html("Kindly input your telephone number");
		}else {

		if (msgr == "" || msgr == null) {

			$('#msg').html("Tell us a little about yourself");
		} else {

			$('#msg').html("Loading... Please wait");

		$.ajax
    (
    {
        type        :  'post',
        url         :  'functions/init.php',
        data        :  {fname:fname,email:email,usname:usname,pword:pword,cpword:cpword,tel:tel,msgr:msgr},
        success     :  function(data)
        {
            $('#msg').html(data);
        }
    }
        )
		}
		}
		}
		}
		}
		}
		}
		}

		$("#exampleModalCenter").modal();
})


//---------- sign in user -----------//
$("#nxtSignin").click(function() 
	{

	var snemail    = $("#email").val();
	var snpword    = $("#pword").val();

	if (snemail == "" || snemail == null) {

		$('#msg').html("Please input your email address");
	} else {

	if (snpword == null || snpword == "") {

		$('#msg').html("Kindly input your password");
	} else {

		$('#msg').html("Loading... Please wait");

						$.ajax
    (
    {
        type        :  'post',
        url         :  'functions/init.php',
        data        :  {snemail:snemail,snpword:snpword},
        success     :  function(data)
        {
            $('#msg').html(data);
        }
    }
        )

	}
	}
	$("#exampleModalCenter").modal();
	})


	//---------- forgot password ------//
	$("#nxtforgot").click(function() 
	{

	var fgtemail    = $("#email").val();

	if (fgtemail == null || fgtemail == "") {

		$('#msg').html("Kindly input your email address");
	} else {
		$('#msg').html("Loading... Please wait");

		$.ajax
    (
    {
        type        :  'post',
        url         :  'functions/init.php',
        data        :  {fgtemail:fgtemail},
        success     :  function(data)
        {
            $('#msg').html(data);
        }
    }
        )

	}

	$("#exampleModalCenter").modal();
})



//------------ update password ----------//
$("#frgtnxt").click(function() 
{

	var fnxpword    = $("#pword").val();
	var fnxcpword   = $("#cpword").val();
	var fnztci		= $("#fxgacti").val();

	if (fnxpword == null || fnxpword == "") {

		$('#msg').html("Kindly create a new password");
	} else {

		if (fnxcpword == null || fnxcpword == "") {

		$('#msg').html("Please confirm your password");
		} else {

		if (fnxpword != fnxcpword) {

		$('#msg').html("The password does not match");
		} else {
		$('#msg').html("Loading... Please wait");
		$.ajax
    (
    {
        type        :  'post',
        url         :  'functions/init.php',
        data        :  {fnxpword:fnxpword,fnxcpword:fnxcpword,fnztci:fnztci},
        success     :  function(data)
        {
            $('#msg').html(data);
        }
    }
        )

		}
		}
	}

	$("#exampleModalCenter").modal();
})

//post comment
$("#cbtn").click(function() 
{

	var cfname    = $("#cfname").val();
	var cemail    = $("#cemail").val();
	var cpost     = $("#cpost").val();
	var cxt       = $("#cxt").val();

	if (cfname == '' || cfname == null) {

	$('#msg').html("Please input your name");	
	} else {

	if (cemail == null || cemail == '') {

	$('#msg').html("Please input your email");
	} else {

	if (cxt == null || cxt == '') {

	$('#msg').html("What`s on your mind?");
	} else {

	$.ajax
    (
    {
        type        :  'post',
        url         :  'functions/init.php',
        data        :  {cfname:cfname,cemail:cemail,cpost:cpost,cxt:cxt},
        success     :  function(data)
        {
            $('#msg').html(data);
        }
    }
        )

	}
	}
	}

$("#exampleModalCenter").modal();
})
})	