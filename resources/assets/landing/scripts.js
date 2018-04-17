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

var oneModal = {
    btn: null,
    title: null,
    btn_title: null,
    modal: null,
    jsonInput: null
};
$('#oneModal').on('show.bs.modal', function (event) {
    oneModal.btn = $(event.relatedTarget);
    oneModal.title = oneModal.btn.data('title');
    oneModal.btn_title = oneModal.btn.data('btntitle');
    oneModal.modal = $(this);
    oneModal.modal.find('.modal-title').text(oneModal.title);
    oneModal.modal.find('.js-btn_title').text(oneModal.btn_title);
    oneModal.jsonInput = oneModal.btn.data('inputbox');
    oneModal.modal.find('.inputHiddenBox').html('');
    oneModal.jsonInput.forEach(function (v, i) {
        oneModal.modal.find('.inputHiddenBox').append('<input type="hidden" name="'+v.name+'" value="'+v.value+'">');
    });
});