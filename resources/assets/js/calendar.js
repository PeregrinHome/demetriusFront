'use strict';

function initCalendar() {

    var calendarVar = $('#calendar__body__table'),

        calendarBar = $('#calendar__body__bar'),

        calendar__prev_year = $('.calendar--prev-year'),
        calendar__today_year = $('.calendar--today-year'),
        calendar__next_year = $('.calendar--next-year'),

        calendar__prev_month = $('.calendar__body__pagination__item__text--left'),
        calendar__today_month = $('.calendar__body__pagination__item__text--center'),
        calendar__next_month = $('.calendar__body__pagination__item__text--right'),

        // calendarIsotopInit = false,

        calendarVar__tr = null,
        calendarVar__event = [];

    function renderCalendarBar(events) {
        // if (calendarIsotopInit) {
        //     calendarBar.isotope('destroy');
        // }
        calendarBar.html('');
        events.forEach(function (v) {
            calendarBar.append('<div class="calendar__body__bar__item">\n' +
                '                    <div class="calendar__body__bar__item__content">\n' +
                '                        <a class="text-decoration-none" href="'+v.url+'">\n' +
                '                            <div class="calendar__body__bar__item__content--bg images-cover"\n' +
                '                                 style="background-image: url('+v.img+');">\n' +
                '                                <p class="calendar__body__bar__item__content--title h3">'+v.title+'</p>\n' +
                '                                <p class="calendar__body__bar__item__content--description">'+v.shortDesc+'</p>\n' +
                '                                <p class="calendar__body__bar__item__content--when">'+v.dataText+'</p>\n' +
                '                                <div class="calendar__body__bar__item__content--bg-dark"></div>\n' +
                '                            </div>\n' +
                '                        </a>\n' +
                '                    </div>\n' +
                '                </div>');
        });
        // calendarBar.isotope({
        //     // options
        //     itemSelector: '.calendar__body__bar__item',
        //     layoutMode: 'fitRows'
        // });
        // calendarIsotopInit = true;
    }

    calendarVar.fullCalendar({
        themeSystem: 'bootstrap4',
        defaultView: 'month',
        locale: 'ru',
        lang: 'ru',
        header: {
            left: '',
            center: '',
            right: ''
        },
        contentHeight: "auto",
        editable: false,
        viewRender: function (view, element) {
            // console.log(element);
        },
        eventLimit: false, // allow "more" link when too many events
        weekNumbers: false,
        navLinks: false,
        eventLimitText: function (n) {
            return 'Ещё ' + n + '';
        },
        events: {
            url: window.educationsRoute,
            type: 'GET',
            data: {
                _token: document.getElementsByName('csrf-token')[0].value
            },
            error: function() {
                alert('there was an error while fetching events!');
            },
            cache: true
        },
        // events:
        //     [
        //         {
        //             id: 1,
        //             title: 'My Event My Event My Event My Event My Event',
        //             shortDesc: 'Вопросы средней длины Техники Деметриус и кое что ещё!',
        //             dataText: '5 сен',
        //             start: '2018-04-4',
        //             end: '2018-04-4',
        //             textColor: 'black',
        //             color: 'transparent',
        //             borderColor: 'green',
        //             city: ['moscow'],
        //             tags: ['js-faculty-id-4'],
        //             img: '/images/pages/event/1.png',
        //             url: '#'
        //         }
        //     ],
        eventAfterRender: function (event, element, view) {
            if (calendarVar__event.indexOf(event.id) === -1) {
                calendarVar__event.push(event.id);
            }

        },
        eventAfterAllRender: function (view) {
            renderCalendarBar(calendarVar.fullCalendar('clientEvents',
                function (event) {
                    if (calendarVar__event.indexOf(event.id) >= 0) { return true; } else { return false; }
                })
            );
            calendarVar__event = [];
        },
        eventRender: function eventRender(event, element, view) {

            calendarVar__tr = false;

            // Сначала фильтруем город
            if (event.city.length > 0) {
                for (var j = 0; j < findControws(true)[0].length; j++) {
                    if (['all'].concat(event.city).indexOf(findControws(true)[0][j]) >= 0) {
                        calendarVar__tr = true;
                        break;
                    }
                }
            } else {
                calendarVar__tr = true;
            }

            // Потом фильтруем по тегам
            if (calendarVar__tr) {
                calendarVar__tr = false;
                for (var i = 0; i < findControws(true)[1].length; i++) {
                    if (['all'].concat(event.tags).indexOf(findControws(true)[1][i]) >= 0) {
                        calendarVar__tr = true;
                        break;
                    }
                }
            }
            return calendarVar__tr;
        }
        // eventRender: function(event, element) {
        //     // var elem = $(element);
        //     // elem.find('.fc-content').prepend('<div class="img-contain calendar--img-event" style="background-image: url('+event.img+');"></div>')
        // }
    });

    calendar__today_year.html(calendarVar.fullCalendar('getDate').format('YYYY'));

    function rebootInfoBtn() {
        calendar__today_year.html(calendarVar.fullCalendar('getDate').format('YYYY'));
        calendar__today_month.html(calendarVar.fullCalendar('getDate').format('MMMM'));

        calendar__prev_month.html(calendarVar.fullCalendar('getDate').add(-1, 'M').format('MMMM'));
        calendar__next_month.html(calendarVar.fullCalendar('getDate').add(1, 'M').format('MMMM'));
    }

    $('.template__control--inline__item--radio-checkbox__input, .template__control--inline__item--select').on('change', function () {
        calendarVar.fullCalendar('rerenderEvents');
    });

    calendar__prev_year.on('click', function (e) {
        e.preventDefault();
        calendarVar.fullCalendar('prevYear');
        rebootInfoBtn();
    });
    calendar__next_year.on('click', function (e) {
        e.preventDefault();
        calendarVar.fullCalendar('nextYear');
        rebootInfoBtn();
    });

    calendar__prev_month.on('click', function (e) {
        e.preventDefault();
        calendarVar.fullCalendar('prev');
        rebootInfoBtn();
    });
    calendar__next_month.on('click', function (e) {
        e.preventDefault();
        calendarVar.fullCalendar('next');
        rebootInfoBtn();
    });
}