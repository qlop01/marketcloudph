function startvalidation() {
	// validate signup form on keyup and submit
	$("#signupForm").validate({
		rules: {
			first_name: "required",
			last_name: "required",
			phone: {
				required: true,
				minlength: 7,
				number: true
			},
			username: {
				required: true,
				minlength: 5,
				remote:
				{
    	 			 url:  CI_ROOT+"auth/remote_username_check",
        			type: "post",
				}
				
			},
			password: {
				required: true,
				minlength: 8
			},
			company:"required",
			password_confirm: {
				required: true,
				minlength: 8,
				equalTo: "#password"
			},
			email: {
				required: true,
				email: true,
				remote:
				{
    	 			 url:  CI_ROOT+"auth/remote_email_check",
        			type: "post",
				}
			},
			confirm_email: {
				required: true,
				email: true,
				equalTo: "#email"
			},
			cbx_agree: "required"
		},
		messages: {
			first_name: "Please enter your first name",
			last_name: "Please enter your surname",
			company:"Please enter a company name or Type n/a",
			contact_no: {
				required: "Please enter your Contact number",
				minlength: "Contact # must consist of atleast 7 numbers",
				number: "Please enter a valid Contact number"
			},
			username: {
				required: "Please enter a username",
				minlength: "Username must consist of at least 5 characters",
				remote: "Username already taken"
			},
			password: {
				required: "Please provide a password",
				minlength: "Password must be at least 8 characters long"
			},
			password_confirm: {
				required: "Please provide a password",
				minlength: "Password must be at least 8 characters long",
				equalTo: "Please enter the same password as above"
			},
			email: {
				required: "Please enter your email address",
				email: "Please enter a valid email address",
				remote: "Email already taken"
			},
			confirm_email: {
				required: "Please enter your email address",
				email: "Please enter a valid email address",
				equalTo: "Email does not match"
			},
			cbx_agree: "Please accept our policy"
		}
	});
	
};