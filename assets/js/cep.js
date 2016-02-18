jQuery(document).ready(function() {

    var numbersOnly = function(event){
        //console.log(arguments[0].target.value);
        //console.log(event.target.value);
        //console.log($(this).val());
        //console.log(this.value.replace(/\D+/g, ""));
        this.value = this.value.replace(/\D+/g, "");
    };

    var getAddress = function(){
        console.log(this.value);
        if (this.value.length === 8) {
            jQuery(this).removeClass('error');
            jQuery.ajax({
                "url": "http://cep.correiocontrol.com.br/" + this.value + ".json",
                "dataType": "json",
                "error": getAddressError,
                "success": getAddressSuccess,
                "beforeSend": openLoading,
                "complete": closeLoading
            });
        } else {
            jQuery(this).addClass('error').focus();
        }
    };

    var openLoading = function() {
        jQuery("#numero").focus();
    };

    var closeLoading = function() {
        console.log('Fechou!');
    };

    var getAddressSuccess = function(data) {
        //console.log("Deu bom, moleque!");
        //jQuery("#cidade").val(data["localidade"]);
        jQuery.each(data, function(key, value){
            jQuery("#" + key).val(value);
        });
    };

    var getAddressError = function() {
        console.log("Deu ruim.");
    };

    //Binding Events
    jQuery("#cep")
        .on("input", numbersOnly)
        .on("focusout", getAddress);

    jQuery("#cpf")
        .on("input", numbersOnly);

});