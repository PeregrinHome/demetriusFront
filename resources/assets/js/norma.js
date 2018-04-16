var norma = {
    trigger: null,
    mainFun: function (time) {
        if($("div").is(".template__control--inline__item")){
            clearTimeout(norma.trigger);
            norma.trigger = setTimeout(function(){
                // norma.height_start = $($(".template__control--inline__item")[0]).offset().top;

                $(".template__control--inline__item").each(function ( index, value ) {
                    $(value).removeClass('norma');
                    $(value).removeClass('norma--left');
                    $(value).removeClass('norma--right');
                });

                $(".template__control--inline__item").each(function ( index, value ) {
                    if(!!$(".template__control--inline__item")[index + 1] && $($(".template__control--inline__item")[index]).offset().top < $($(".template__control--inline__item")[index + 1]).offset().top){
                        $(value).addClass('norma--right');
                    }
                    if(!!$(".template__control--inline__item")[index - 1] && $($(".template__control--inline__item")[index]).offset().top > $($(".template__control--inline__item")[index - 1]).offset().top){
                        $(value).addClass('norma--left');
                    }
                    if(!!$(".template__control--inline__item")[index + 1] && $($(".template__control--inline__item")[index]).offset().top == $($(".template__control--inline__item")[index + 1]).offset().top && $($(".template__control--inline__item")[index + 1]).is(".norma--dev")){
                        $(value).addClass('norma--right');
                    }
                });
                $(".template__control--inline").each(function ( index1, value1 ) {
                    norma.trigger2 = false;
                    $(value1).find(".template__control--inline__item").each(function ( index2, value2 ) {
                        if(!!$(value1).find(".template__control--inline__item")[index2 - 1] && $($(value1).find(".template__control--inline__item")[index2]).offset().top > $($(value1).find(".template__control--inline__item")[index2 - 1]).offset().top){
                            norma.trigger2 = true;
                        }
                        if(norma.trigger2){
                            $(value2).addClass('norma');
                        }
                    });
                });
            },time);
        }
    },
    init:function () {
        $( window ).resize(function() {
            norma.mainFun(2000);
        });
        norma.mainFun(2000);
    }
};
$(document).ready(function () {
    // norma.init();
    // Интегрирую в calendar.js вызов на 547 строке -> norma.init();
    // Интегрирую в programm.js вызов -> norma.init();
});