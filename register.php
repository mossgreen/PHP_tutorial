<?php 
require_once 'core/init.php';
include 'includes/head.php';
include 'includes/navigation.php';
include 'includes/headerpartial.php';


?>

<div class="panel-body">
	<div class="form col-md-8">
		<form class="form-validate form-horizontal " id="register_form" method="get" action="">
			<div class="form-group ">
				<label for="firstname" class="control-label col-lg-2">First Name<span class="required">*</span></label>
				<div class="col-lg-10">
					<input class=" form-control" id="firstname" name="firstname" type="text" />
				</div>
			</div>

			<div class="form-group ">
				<label for="lastname" class="control-label col-lg-2">Last Name <span class="required">*</span></label>
				<div class="col-lg-10">
					<input class="form-control " id="lastname" name="lastname" type="text" />
				</div>
			</div>

			<div class="form-group ">
				<label for="email" class="control-label col-lg-2">Email <span class="required">*</span></label>
				<div class="col-lg-10">
					<input class="form-control " id="email" name="email" type="text" />
				</div>
			</div>
			<div class="form-group ">
				<label for="password" class="control-label col-lg-2">Password <span class="required">*</span></label>
				<div class="col-lg-10">
					<input class="form-control " id="password" name="password" type="password" />
				</div>
			</div>
			<div class="form-group ">
				<label for="confirm_password" class="control-label col-lg-2">Confirm Password <span class="required">*</span></label>
				<div class="col-lg-10">
					<input class="form-control " id="confirm_password" name="confirm_password" type="password" />
				</div>
			</div>
			<div class="form-group ">
				<label for="email" class="control-label col-lg-2">Phone Type <span class="required">*</span></label>
				<div class="col-lg-10">
					<select name="phonetype" class="col-lg-4">
						<option value="">Select Phone Type...</option>
						<option value="M">Home</option>
						<option value="F">Office</option>
						<option value="F">Mobile</option>
					</select>
				</div>
			</div>
			<div class="form-group ">
				<label for="phonenumber" class="control-label col-lg-2">Phone Number <span class="required">*</span></label>
				<div class="col-lg-10">
					<input class="form-control " id="phonenumber" name="phonenumber" type="text" />
				</div>
			</div>

			<div class="form-group ">
				<label for="agree" class="control-label col-lg-2 col-sm-3">Agree to Our Policy <span class="required">*</span></label>
				<div class="col-lg-10 col-sm-9">
					<input  type="checkbox" style="width: 20px" class="checkbox form-control" id="agree" name="agree" />
				</div>
			</div>
			<div class="form-group">
				<div class="col-lg-offset-2 col-lg-10">
					<button class="btn btn-primary" type="submit">Save</button>
					<button class="btn btn-default" type="button">Cancel</button>
				</div>
			</div>
		</form>
	</div>
</div>

<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script type="text/javascript">


	var Script = function () {

		$.validator.setDefaults({
			submitHandler: function() { alert("submitted!"); }
		});

		$().ready(function() {
        // validate the comment form when it is submitted
        $("#feedback_form").validate();

        // validate signup form on keyup and submit
        $("#register_form").validate({
        	rules: {
        		firstname: {
        			required: true,
        			minlength: 1,
        		},
        		lastname: {
        			required: true,
        			minlength: 1,
        		},
        		email: {
        			required: true,
        			minlength: 5,
        			email: true,
        		},
        		password: {
        			required: true,
        			minlength: 6,
        		},
        		confirm_password: {
        			required: true,
        			minlength: 6,
        			equalTo: "#password",
        		},
        		phonetype: {
        			required: true,
        			minlength: 1,
        		},
        		phonenumber: {
        			required: true,
        			minlength: 6,
        		},
        		agree: "required"
        	},
        	messages: {                
        		firstname: {
        			required: "Please enter a First Name.",
        			minlength: "Your First Name must consist of at least 1 characters long."
        		},
        		lastname: {
        			required: "Please enter a Lst Name.",
        			minlength: "Your Lst Name must consist of at least 1 characters long."
        		},
        		email: "Please enter a valid email address.",
        		password: {
        			required: "Please provide a password.",
        			minlength: "Your password must be at least 5 characters long."
        		},
        		confirm_password: {
        			required: "Please provide a password.",
        			minlength: "Your password must be at least 5 characters long.",
        			equalTo: "Please enter the same password as above."
        		},
        		phonetype: {
        			required: "Please select a Phone Type.",
        			minlength: "Your Address must consist of at least 1 characters long."
        		},
        		phonenumber: {
        			required: "Please enter a Phone Number.",
        			minlength: "Your Phone Number must consist of at least 6 characters long."
        		},
        		
        		agree: "Please accept our terms & condition."
        	}
        });


    });


	}();
</script>