'use strict';

// setInterval(function () {
//     toggleDiamonds();
// }, 10000);
//
// function toggleDiamonds() {
//     let d1 = $('.diamond-1'),
//         d2 = $('.diamond-2');
//     d1.toggleClass('diamond-active');
//     d2.toggleClass('diamond-active');
// }

$('.nav-item--dropdown').hover(function() {
    if($(document).width() >= 992){
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
    }
}, function() {
    if($(document).width() >= 992){
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
    }
});

$(document).on('click', '[data-toggle="lightbox"]', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox();
});

function imgLoadedDemetrius(t) {
    $("#insertImgMain--hide").hide();
    $(t).addClass("diamond-active");
}

$(document).ready(function(){

    $('.wrap__main-preloader').fadeOut(500);

    // loadImage(
    //     "/images/static/ooooooooo.gif",
    //     function (img) {
    //         if(img.type === "error") {
    //             console.log("Error loading image " + imageUrl);
    //         } else {
    //             $("#insertImgMain--hide").hide();
    //             $("#insertImgMain").append($(img).addClass("img-fluid diamond-1 diamond-item diamond-active"));
    //             //document.body.appendChild(img);
    //         }
    //     },
    //     {maxWidth: 1200}
    // );

    $('.trainer__first-events--owl-carousel').owlCarousel({
        "items": 4,
        "merge": true,
        "autoWidth": true,
        "dots": false
    });

    $('.owl-carousel--master').owlCarousel({
        "items": 3,
        "merge": true,
        "autoWidth": false,
        "dots": false
    });

    $('.trainer__portfolio--owl-carousel').owlCarousel({
        "items": 4,
        "merge": true,
        "autoWidth": true,
        "dots": false
    });

    $('.trainer__courses--owl-carousel').owlCarousel({
        "items": 4,
        "merge": true,
        "autoWidth": true,
        "dots": false
    });

    $('.about-course__advantage--owl-carousel').owlCarousel({
        "items": 4,
        "merge": true,
        "autoWidth": true,
        "dots": false,
        "mouseDrag": false,
        "touchDrag": true
    });

    $('.template__input--datepicker').datepicker({language: 'ru-RU'});

    // $(".about-school__our-team__block__item").mouseover(function () {
    //     $(this).animate({
    //         "flex-grow": 9999999999999999999
    //     }, 200, function() {
    //         // Animation complete.
    //     });
    // },function () {
    //     $(this).css("flex-grow", "");
    // });

    if ($("*").is('.calendar')){
        initCalendar();
        norma.init();
    }



    if($(document).width() > 768 && typeof(dhtmlLoadScript) === "function"){
        dhtmlLoadScript("https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Af683efc92ee432a7bc17743f6b15edbd8feae95ce09c5aeb4b68e5221b4fd340&amp;id=contacts__map--map");
    }

    var timeoutTrigger1 = null, timeoutTrigger2 = null;
    
    $('.js-random-review').click(function (e) {

        e.preventDefault();

        clearTimeout(timeoutTrigger1);
        timeoutTrigger1 = setTimeout(function () {
            $.ajax({
                type: 'GET',
                dataType: 'json',
                url: '/reviews/random',
                error: function (error) {
                    console.log(error);
                },
                success: function (data) {
                    if(typeof(data) !== "undefined"){
                        $('.js-random-review--name').html(data.review_name);
                        $('.js-random-review--text').html(data.review_text);
                    }
                }
            });
        }, 0);
    });

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

    if($(document).width() < 992) {
        $('.masters__block-lightning').hover(function () {
            $(this).addClass('active');
        }, function () {
            $(this).removeClass('active');
        });
    }

    $('#photogallery').isotope({
        // options
        percentPosition: true,
        masonry: {
            columnWidth: '.photogallery__item'
        },
        itemSelector: '.photogallery__item'
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
    
    $('.js-text--truncate--metka-2').on('click', function () {
        $('#modalReview .modal-body').html($(this).html());
        $('#modalReview .modal-footer').html(
            '<p class="font-pt-sans font-italic text-right margin-top-auto mb-0">\n' +
            '                        '+ $(this).data('author') +
            '                    </p>' +
            '<small class="font-pt-sans text-muted text-right">\n' +
            '                       '+ $(this).data('create') +
            '                    </small>'
        );
        $('#modalReview').modal('show');
    });

    var idOtr = -1;
    $('.js-random-review-2').on('click', function (e) {
        e.preventDefault();
        idOtr = $(this).data('id');

        clearTimeout(timeoutTrigger2);
        timeoutTrigger2 = setTimeout(function () {
            $.ajax({
                type: 'GET',
                dataType: 'json',
                url: '/reviews?take=2&course_id='+idOtr,
                error: function (error) {
                    console.log(error);
                },
                success: function (json) {
                    if(typeof(json) !== "undefined"){
                        console.log(json);
                        json.forEach(function (v, i) {
                            var seliTEM = $('.js-random-review--text-2-'+i);
                            seliTEM.html(v.review_text);
                            seliTEM.data('author', v.review_name);
                            seliTEM.data('create', v.created_date);
                            $('.js-random-review--author-2-'+i).html(v.review_name);
                            $('.js-random-review--create-2-'+i).html(v.created_date);
                        });
                    }
                }
            });
        }, 0);
    });


    // $('.js-animation-replace-1').addClass('aria-animation--start');
    $('.js-animation-replace-2').addClass('aria2-animation--start');
});