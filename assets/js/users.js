jQuery(document).ready(function () {
    //Hide save and go back to list button
    jQuery("#save-and-go-back-button").hide();
    
    //Add function for alphanumeric validation
    jQuery.validator.addMethod("alphanumeric", function (value, element) {
        return this.optional(element) || /^[a-zA-Z0-9]+$/i.test(value);
    }, "Allowed only alpha numeric value.");
    
    jQuery.validator.addMethod("mobileFormat", function (value, element) {
        return this.optional(element) || /^\d{10}$/.test(value);
    }, "Enter valid 10 digit mobile number.");


    //On Save button check validation
    jQuery("#form-button-save").click(function (event) {
        if (!jQuery("#crudForm").valid() || jQuery("#field-roleId").val() == "") {
            //Add error message if role not selected
            if (jQuery("#field-roleId").val() == "")
                jQuery("#roleId_input_box").append('<label id="roleId-error" class="error" for="field-roleId">Please select role.</label>');
            //Prevent submit event
            event.preventDefault();
        }
    });

//On change hide select role error message
    jQuery("#field-roleId").change(function () {
        jQuery("#roleId-error").hide();
    });

//Add validation  
    jQuery("#crudForm").validate({
        rules: {
            fName: {
                required: true
            },
            lName: {
                required: true
            },
            mobileNumber: {
                required: true,
                maxlength: 10,
                mobileFormat: true
            }
        },
        messages: {
            fName: {
                required: "Please enter first Name."
            },
            lName: {
                required: "Please enter last Name."
            },
            mobileNumber: {
                required: "Please enter mobile number."
            }
        },
//    submitHandler: function (form) { // for demo
//      form.submit();      
//    }
    });


    //Profile form validation
    jQuery("#frmprofile").validate({
        rules: {
            fName: {
                required: true
            },
            lName: {
                required: true
            },
            mobileNumber: {
                required: true
            },
            password: {
                minlength: 3,
                alphanumeric: true
            },
            confirmPassword: {
                minlength: 3,
                equalTo: "#password"
            }
        },
        messages: {
            fName: {
                required: "Please enter first Name."
            },
            lName: {
                required: "Please enter last Name."
            },
            mobileNumber: {
                required: "Please enter mobile number."
            },
            password: {
                minlength: "Your password must contain more than 3 characters."
            },
            confirmPassword: {
                minlength: "Your password must contain more than 3 characters.",
                equalTo: "New password and confirm password must be same." // custom message for mismatched passwords
            }
        },
        submitHandler: function (form) { // for demo
            form.submit();
        }
    });

});