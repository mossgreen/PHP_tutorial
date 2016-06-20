
    var Script = function () {

        $.validator.setDefaults({
            submitHandler: function() { $("#register_form" ).submit();  }
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
                
            }
        });


    });


    }();