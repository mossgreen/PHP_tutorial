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
        		fullname: {
        			required: true,
        			minlength: 6
        		},
        		address: {
        			required: true,
        			minlength: 10
        		},
        		username: {
        			required: true,
        			minlength: 5
        		},
        		password: {
        			required: true,
        			minlength: 5
        		},
        		confirm_password: {
        			required: true,
        			minlength: 5,
        			equalTo: "#password"
        		},
        		email: {
        			required: true,
        			email: true
        		},
        		topic: {
        			required: "#newsletter:checked",
        			minlength: 2
        		},
        		agree: "required"
        	},
        	messages: {                
        		fullname: {
        			required: "Please enter a Full Name.",
        			minlength: "Your Full Name must consist of at least 6 characters long."
        		},
        		address: {
        			required: "Please enter a Address.",
        			minlength: "Your Address must consist of at least 10 characters long."
        		},
        		username: {
        			required: "Please enter a Username.",
        			minlength: "Your username must consist of at least 5 characters long."
        		},
        		password: {
        			required: "Please provide a password.",
        			minlength: "Your password must be at least 5 characters long."
        		},
        		confirm_password: {
        			required: "Please provide a password.",
        			minlength: "Your password must be at least 5 characters long.",
        			equalTo: "Please enter the same password as above."
        		},
        		email: "Please enter a valid email address.",
        		agree: "Please accept our terms & condition."
        	}
        });

        // propose username by combining first- and lastname
        $("#username").focus(function() {
        	var firstname = $("#firstname").val();
        	var lastname = $("#lastname").val();
        	if(firstname && lastname && !this.value) {
        		this.value = firstname + "." + lastname;
        	}
        });

        //code to hide topic selection, disable for demo
        var newsletter = $("#newsletter");
        // newsletter topics are optional, hide at first
        var inital = newsletter.is(":checked");
        var topics = $("#newsletter_topics")[inital ? "removeClass" : "addClass"]("gray");
        var topicInputs = topics.find("input").attr("disabled", !inital);
        // show when newsletter is checked
        newsletter.click(function() {
        	topics[this.checked ? "removeClass" : "addClass"]("gray");
        	topicInputs.attr("disabled", !this.checked);
        });
    });


	}();
</script>