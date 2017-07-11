
$(document).ready(function(){
    $('.search-submit').attr('disabled',true);
    $('.search-field').keyup(function(){
        if($(this).val().length !=0)
            $('.search-submit').attr('disabled', false);            
        else
            $('.search-submit').attr('disabled',true);
    })
});





/*$('.search-form > input').on('input', function () {
        var empty = false;
        $('form > input').each(function () {
            if ($(this).val() == '') {
                empty = true;
            }
        });
    
        if (empty) {
            $('.search-submit').attr('disabled', 'disabled');
        } else {
            $('.search-submit').removeAttr('disabled');
        }
    });*/


