jQuery(document).ready(function () {

    //On Save button check validation
    jQuery("#payNow").click(function (event) {
        var txnid = jQuery("#txnid").val();
        var amount = jQuery("#amount").val();
        var productinfo = jQuery("#productinfo").val();
       // alert(txnid+"=="+amount+"=="+productinfo);
        jQuery.ajax({
            type: 'POST',
            url: siteUrl + 'transaction/insertPaymentData',
            dataType: 'json',
            data: {txnid: txnid, amount: amount, productinfo: productinfo},
            success: function (data) {
                
            }
        });
    });

});