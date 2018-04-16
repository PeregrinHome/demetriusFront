<div class="action-two-box-img-text">
    <div class="template__arrow-blog-left-universal">

        <div class="template__orientation-backward-out template__arrow-blog-left-universal--fix-orientation-backward-out">
            <div class="template__orientation-backward-in bg-white">
                <div class="template__orientation-backward-compensation template__arrow-blog-left-universal--fix-orientation-backward-compensation"></div>
            </div>
        </div>

        <div class="template__arrow-blog-left-universal__responsive-block-1k2">
            <div class="template__arrow-blog-left-universal__responsive-block-1k2__content">
                <div class="action-two-box-img-text__content">
                    <div class="action-two-box-img-text__content__left-img images-cover" style="background-image: url('{!! $img ?? null !!}')"></div>
                    <div class="action-two-box-img-text__content__right-text main-bg-color-red">
                        <div class="action-two-box-img-text__content__right-text__content">
                            <p class="text-white text-center-md text-left slim-mainpage-h1 slim-mainpage-h1-special font-oswald">
                                {!! $title_html ?? null !!}
                            </p>
                            <a {!! $btn_atr ?? null !!} class="btn btn-main-white-black margin-left-1-rem margin-right-1-rem">{{ $btn_title ?? null }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="template__orientation-direct-out template__arrow-blog-left-universal--fix-orientation-direct-out">
            <div class="template__orientation-direct-in bg-white">
                <div class="template__orientation-direct-compensation template__arrow-blog-left-universal--fix-orientation-direct-compensation"></div>
            </div>
        </div>
    </div>
</div>

<div class="template__simlpe-text padding-top-bottom-3-rem">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-9">
                <p class="articlepage-p">
                    {!! $description ?? null !!}
                </p>
            </div>
            <div class="col-12 col-md-3">
                <a href="{!! $description_link ?? null !!}" class="color-red color-red-hover-red articlepage-p2 event-orient-fix-1">
                    {!! $description_title ?? null !!}
                </a>
            </div>
        </div>
    </div>
</div>