/* 
 * Commission validations
 * 
 * 
 */
jQuery(document).ready(function () {
    //Hide save and go back to list button
    jQuery("#save-and-go-back-button").hide();
    
    //Add function for float validation
    jQuery.validator.addMethod("floatVal", function (value, element) {
        return this.optional(element) || /^[0-9,]+(\.\d{0,3})?$/.test(value);
    }, "Allowed only valid float value.");
    
   


    //On Save button check validation
    jQuery("#form-button-save").click(function (event) {
        if (!jQuery("#crudForm").valid() || jQuery("#field-deviceTypeId").val() == "" || jQuery("#field-distributorId").val() == "") {
            //Add error message if device not selected
            if (jQuery("#field-deviceTypeId").val() == "")
                jQuery("#deviceTypeId_input_box").append('<label id="deviceTypeId-error" class="error" for="field-deviceTypeId">Please select device type.</label>');
            //Add error message if distributer not selected
            if (jQuery("#field-distributorId").val() == "")
                jQuery("#distributorId_input_box").append('<label id="distributorId-error" class="error" for="field-distributorId">Please select distributor.</label>');
            
            //Prevent submit event
            event.preventDefault();
        }
    });

//Add validation  
    jQuery("#crudForm").validate({
        rules: {
            deviceTypeId: {
                required: true
            },
            distributorId: {
                required: true
            },
            currentCommission: {
                required: true,
                maxlength: 10,
                floatVal: true
            }
        },
        messages: {
            deviceTypeId: {
                required: "Please select device type."
            },
            distributorId: {
                required: "Please select distributor."
            },
            currentCommission: {
                required: "Please enter commission."
            }
        },
//    submitHandler: function (form) { // for demo
//      form.submit();      
//    }
    });


   
});


