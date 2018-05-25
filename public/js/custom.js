jQuery( document ).ready(function() {
    jQuery("#languageSwitcher").change(function () {
        var locale  = jQuery(this).val();
        var _token  = jQuery("#input_token").val();
        jQuery.ajax({
            url:"/language",
            type:"POST",
            data:{locale:locale,_token: _token},
            datatype:'json',
            success:function (data) {

            },
            error:function (data) {

            },
            beforeSend:function () {

            },
            complete:function (data) {
                window.location.reload(true);
            }
        });
    });

    var explode = function(){
        jQuery('#lin').css('color', 'red');
    };
    var inplode = function(){
        jQuery('#lin').css('color', 'white');
    };
    setInterval(explode, 500);
    setInterval(inplode, 1000);
});