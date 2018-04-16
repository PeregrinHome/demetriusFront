// if($('*').is('#js-lending')){
//     var js_lending = new Vue(js_lending__setting);
// }
var jsTextTruncate = null, jsTextTruncate__hs = null;
$('.js-text--truncate').on('click',function (e) {
    jsTextTruncate = $(this);
    if(!jsTextTruncate.hasClass('active')){
        jsTextTruncate.addClass('active');
        jsTextTruncate__hs = jsTextTruncate.find('.js-text--truncate--metka').height();
        jsTextTruncate.css('height', jsTextTruncate__hs + 'px');

    }else{
        jsTextTruncate.css('height', '6rem');
        setTimeout(function () {
            jsTextTruncate.removeClass('active');
        }, 300);

    }
});
$(document).on('click', '[data-toggle="lightbox"]', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox();
});