<style>
    .faculties__block {
        position: relative;
        margin: -3rem;
        text-align: center;
    }
    .faculties__block-inner {
        position: relative;
        top:0;
        left: 0;
        right: 0;
        bottom: 0;
        padding: 0 19%;
    }
    .faculties__h3 {
        text-align: center;
        color: white;
        font-size: 1.2rem;
    }

    .faculties__img {
        filter: grayscale(100%);
        transition: all .25s ease;

    }
    .faculties__block:hover .faculties__img {
        filter: grayscale(0);
        transition: all .25s ease;
    }

    .faculties__h3-bg {

    }

    .faculties__bg-img,
    .faculties__block:hover .faculties__bg-img--hover {
        display: block;
        min-width: 100%;
    }
    .faculties__bg-img--hover,
    .faculties__block:hover .faculties__bg-img {
        display: none;
    }

    .faculties__h3-bg {
        background: transparent;
        padding: .3rem .6rem;
    }
    .faculties__block:hover .faculties__h3-bg {
        background: black;
    }



    .faculties__block-square {
        margin: -1.5rem;
        top:5rem;
        padding-bottom: 18rem;
    }
    .faculties__wrapper {
        margin-top: -4rem;
        padding-top:10rem;
        padding-bottom: 2rem;
        overflow: hidden;
    }

    .faculties__block-star {
        margin: -10rem -7rem;
        padding-bottom: 13rem;
    }

    .faculties__block-star-inner {
        padding: 15% 28%;
    }

    .faculties__block-lightning-inner {
        padding-top: 27%;
        padding-right: 25%;
    }
</style>

<section id="faculties" class="faculties">
    <h2 class="mainpage-h2">Факультеты</h2>

    <div class="faculties__wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-12">
                    <a href="{{ route('courses.index', ['faculty'=>'js-faculty-id-1']) }}">
                        <div class="faculties__block  position-relative">
                            <img src="/images/pages/main/faculties/circle-black-main.svg"
                                 class="img-fluid faculties__bg-img">
                            <img src="/images/pages/main/faculties/circle-hover-black-main.svg"
                                 class="img-fluid faculties__bg-img--hover">
                            <div class="position-absolute faculties__block-inner text-center">
                                <img src="/images/pages/main/min/womens-haircuts.png"
                                     class="img-fluid faculties__img"
                                   >
                                <h3 class="faculties__h3"><span class="faculties__h3-bg">Женские стрижки</span></h3>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-xl-3 col-lg-6 col-12">
                    <a href="{{ route('courses.index', ['faculty'=>'js-faculty-id-2']) }}">
                        <div class="faculties__block  faculties__block-square position-relative">
                            <img src="/images/pages/main/faculties/square-black-main.svg"
                                 class="img-fluid faculties__bg-img">
                            <img src="/images/pages/main/faculties/square-hover-black-main.svg"
                                 class="img-fluid faculties__bg-img--hover">
                            <div class="position-absolute faculties__block-inner  faculties__mans-inner text-center">
                                <img src="/images/pages/main/min/mans-haircuts.png"
                                     class="img-fluid faculties__img"
                                   >
                                <h3 class="faculties__h3"><span class="faculties__h3-bg">Мужские стрижки</span></h3>
                            </div>
                        </div>
                    </a>
                </div>


                <div class="col-xl-3 col-lg-6 col-12">
                    <a href="{{ route('courses.index', ['faculty'=>'js-faculty-id-3']) }}">
                        <div class="faculties__block  faculties__block-star position-relative">
                            <img src="/images/pages/main/faculties/star-black-main.svg"
                                 class="img-fluid faculties__bg-img">
                            <img src="/images/pages/main/faculties/star-hover-black-main.svg"
                                 class="img-fluid faculties__bg-img--hover">
                            <div class="position-absolute faculties__block-inner  faculties__block-star-inner text-center">
                                <img src="/images/pages/main/min/styling.png"
                                     class="img-fluid faculties__img"
                                   >
                                <h3 class="faculties__h3"><span class="faculties__h3-bg">Прически и укладки</span></h3>
                            </div>
                        </div>
                    </a>
                </div>


                <div class="col-xl-3 col-lg-6 col-12">
                    <a href="{{ route('courses.index', ['faculty'=>'js-faculty-id-4']) }}">
                        <div class="faculties__block  faculties__block-lightning position-relative">
                            <img src="/images/pages/main/faculties/lightning-black-main.svg"
                                 class="img-fluid faculties__bg-img">
                            <img src="/images/pages/main/faculties/lightning-hover-black-main.svg"
                                 class="img-fluid faculties__bg-img--hover">
                            <div class="position-absolute faculties__block-inner  faculties__block-lightning-inner text-center">
                                <img src="/images/pages/main/min/color.png"
                                     class="img-fluid faculties__img">
                                <h3 class="faculties__h3"><span class="faculties__h3-bg">Колористика</span></h3>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

</section>