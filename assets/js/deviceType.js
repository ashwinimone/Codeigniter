jQuery(document).ready(function () {
    //Hide save and go back to list button
    jQuery("#save-and-go-back-button").hide();     
    jQuery('.gc-file-upload').attr('accept', 'image/*');
    //Add function for alphanumeric validation
    jQuery.validator.addMethod("alphanumeric", function (value, element) {
        return this.optional(element) || /^[a-zA-Z0-9]+$/i.test(value);
    }, "Allowed only alpha numeric value.");
    
//gc-file-upload
jQuery('input[type=file]').change(function () {
jQuery('#image-error').hide();
 });
    //On Save button check validation
    jQuery("#form-button-save").click(function (event) {        
        if (!jQuery("#crudForm").valid() || jQuery(".hidden-upload-input").val() == "") {
            //Add error message if upload file not selected
            if (jQuery(".hidden-upload-input").val() == "")
            jQuery('<label id="image-error" class="error" for="field-image">Please select file.</label>').insertAfter("#image_input_box");
            //Prevent submit event
            event.preventDefault();
        }
    });


//Add validation  
    jQuery("#crudForm").validate({
        rules: {
            deviceType: {
                required: true
            },
            image: {
                required: true
            }
        },
        messages: {
            deviceType: {
                required: "Please enter device type."
            },
            image: {
                required: "Please select image."
            }
        },
//    submitHandler: function (form) { // for demo
//      form.submit();      
//    }
    });

});