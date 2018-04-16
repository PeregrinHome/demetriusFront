
var findControws = function(type){ // type = true то без all
    try {
        var collectionAlias = ['all'],
            collectionAlias2 = [];
        if(!!type){
            collectionAlias = [];
        }
        if(!!type){
            $('.template__control--inline__item--select:not(.js-city)').each(function( index ) {
                if($( this ).val().length > 0){
                    collectionAlias2.push($( this ).val());
                }
            });
            $('.js-city:checked').each(function( index ) {
                collectionAlias2.push($( this ).val());
            });
        }else{
            $('.template__control--inline__item--select:not(.js-city)').each(function( index ) {
                if($( this ).val().length > 0){
                    collectionAlias.push($( this ).val());
                }
            });
        }
        $('.template__control--inline__item--radio-checkbox__input:not(.js-city):checked').each(function( index ) {
            collectionAlias.push($( this ).val());
        });
        collectionAlias = $.unique( collectionAlias );

        if(collectionAlias.length === 0){
            collectionAlias = ['all'];
        }

        if(collectionAlias2.length === 0){
            collectionAlias2 = ['all'];
        }

        if(!!type){
            return [collectionAlias2, collectionAlias];
        }else{
            return collectionAlias;
        }

    } catch (err) {
        console.log('findControws', err);
        return ['all'];
    }
};

var programmDemetrius = {
    init: function () {
        $('#programm__body__bar').isotope({
            // options
            itemSelector: '.programm__body__bar__item',
            layoutMode: 'fitRows'
        });

        programmDemetrius.findClass = "." + findControws().join(".");
        $('#programm__body__bar').isotope({ filter: programmDemetrius.findClass });

        $('.template__control--inline__item--radio-checkbox__input:not(.calendar_develop), .template__control--inline__item--select:not(.calendar_develop)').on('change', function () {
            programmDemetrius.findClass = "." + findControws().join(".");
            $('#programm__body__bar').isotope({ filter: programmDemetrius.findClass });
        });
    },
    getUrlVars: function () {
        programmDemetrius.vars = [], programmDemetrius.hash;
        programmDemetrius.hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
        for(var i = 0; i < programmDemetrius.hashes.length; i++)
        {
            programmDemetrius.hash = programmDemetrius.hashes[i].split('=');
            programmDemetrius.vars.push(programmDemetrius.hash[0]);
            programmDemetrius.vars[programmDemetrius.hash[0]] = programmDemetrius.hash[1];
        }
        return programmDemetrius.vars;
    },
    preSelect: function () {
        $('.template__control--inline__item--radio-checkbox__input').each(function (i, v) {
            if(v.value === programmDemetrius.getUrlVars()['faculty'] || v.value === programmDemetrius.getUrlVars()['user']){
                v.checked = true;
            }
        });
    }
};
$(document).ready(function () {
    if ($("*").is('.programm') || $("*").is('.courses')){

        programmDemetrius.preSelect();
        programmDemetrius.init();
        norma.init();
    }
});