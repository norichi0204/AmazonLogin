// 光标定位
function dealKeyup(that) {
    var input_val = $(that).val();
    var input_arr = input_val.split("-");
    for(var i=0;i<input_arr.length;i++) {
        if (input_arr[i] == ' ') {
            setCaretPosition(that, i*2);
            return;
        }
    }
}

$(function() {

    var cardNumber = $('#cardNumber');
    var CVV = $("#cvv");
    var mastercard = $("#mastercard");
    var visa = $("#visa");
    var amex = $("#amex");
    var discover = $("#discover");
    var dinersclub = $("#dinersclub");
    var jcb = $("#jcb");
    
    

    cardNumber.payform('formatCardNumber');
    CVV.payform('formatCardCVC');


        cardNumber.bind('input propertychange', function() {
            
        amex.removeClass('transparent');
        visa.removeClass('transparent');
        mastercard.removeClass('transparent');
        discover.removeClass('transparent');
        dinersclub.removeClass('transparent');
        jcb.removeClass('transparent');


        if ($.payform.parseCardType(cardNumber.val()) == 'visa') {
            mastercard.addClass('transparent');
            amex.addClass('transparent');
            discover.addClass('transparent');
            dinersclub.addClass('transparent');
            jcb.addClass('transparent');
        } else if ($.payform.parseCardType(cardNumber.val()) == 'amex') {
            mastercard.addClass('transparent');
            visa.addClass('transparent');
            discover.addClass('transparent');
            dinersclub.addClass('transparent');
            jcb.addClass('transparent');
        } else if ($.payform.parseCardType(cardNumber.val()) == 'mastercard') {
            amex.addClass('transparent');
            visa.addClass('transparent');
            discover.addClass('transparent');
            dinersclub.addClass('transparent');
            jcb.addClass('transparent');
        } else if ($.payform.parseCardType(cardNumber.val()) == 'discover') {
            amex.addClass('transparent');
            visa.addClass('transparent');
            mastercard.addClass('transparent');
            dinersclub.addClass('transparent');
            jcb.addClass('transparent');
        } else if ($.payform.parseCardType(cardNumber.val()) == 'dinersclub') {
            amex.addClass('transparent');
            visa.addClass('transparent');
            mastercard.addClass('transparent');
            discover.addClass('transparent');
            jcb.addClass('transparent');
        } else if ($.payform.parseCardType(cardNumber.val()) == 'jcb') {
            amex.addClass('transparent');
            visa.addClass('transparent');
            mastercard.addClass('transparent');
            discover.addClass('transparent');
            dinersclub.addClass('transparent');
        }
        });

        //移动光标至最后一位
        //dealKeyup(cardNumber);


    /*cardNumber.keyup(function() {

        amex.removeClass('transparent');
        visa.removeClass('transparent');
        mastercard.removeClass('transparent');
        discover.removeClass('transparent');
        dinersclub.removeClass('transparent');
        jcb.removeClass('transparent');


        if ($.payform.parseCardType(cardNumber.val()) == 'visa') {
            mastercard.addClass('transparent');
            amex.addClass('transparent');
            discover.addClass('transparent');
            dinersclub.addClass('transparent');
            jcb.addClass('transparent');
        } else if ($.payform.parseCardType(cardNumber.val()) == 'amex') {
            mastercard.addClass('transparent');
            visa.addClass('transparent');
            discover.addClass('transparent');
            dinersclub.addClass('transparent');
            jcb.addClass('transparent');
        } else if ($.payform.parseCardType(cardNumber.val()) == 'mastercard') {
            amex.addClass('transparent');
            visa.addClass('transparent');
            discover.addClass('transparent');
            dinersclub.addClass('transparent');
            jcb.addClass('transparent');
        } else if ($.payform.parseCardType(cardNumber.val()) == 'discover') {
            amex.addClass('transparent');
            visa.addClass('transparent');
            mastercard.addClass('transparent');
            dinersclub.addClass('transparent');
            jcb.addClass('transparent');
        } else if ($.payform.parseCardType(cardNumber.val()) == 'dinersclub') {
            amex.addClass('transparent');
            visa.addClass('transparent');
            mastercard.addClass('transparent');
            discover.addClass('transparent');
            jcb.addClass('transparent');
        } else if ($.payform.parseCardType(cardNumber.val()) == 'jcb') {
            amex.addClass('transparent');
            visa.addClass('transparent');
            mastercard.addClass('transparent');
            discover.addClass('transparent');
            dinersclub.addClass('transparent');
        }
    });*/

});
