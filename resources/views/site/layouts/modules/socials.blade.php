

<section id="section_footer-socials" class="section__footer-socials position-relative overflow-hidden {{ $sectionClass ?? null }}">
    <div class="template__orientation-backward-out" style="margin-bottom: 2rem;">
        <div class="template__orientation-backward-in section__footer-socials-background {{ $backgroundClass ?? null }}">
            <div class="template__orientation-backward-compensation">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-auto col-8">
                            <div style="padding-bottom: 1rem;">
                                Мы в <a href="{{ env('LINK_DEMETRIUS_INSTAGRAM') }}" class="footer-socials-link" target="_blank">инстаграме</a>
                            </div>

                            <div>
                            <a href="{{ env('LINK_DEMETRIUS_INSTAGRAM') }}" class="footer-socials-link" target="_blank">
                            <img src="/images/pages/main/socials/insta.png" class="img-fluid">
                            </a>
                            </div>

                        </div>
                        <div class="col-lg-auto col-8">
                            <div style="padding-bottom: 1rem;">
                                во  <a href="{{ env('LINK_DEMETRIUS_VKONTAKTE') }}" class="footer-socials-link" target="_blank">вконтакте</a>

                            </div>
                            <div>
                                <a href="{{ env('LINK_DEMETRIUS_VKONTAKTE') }}" class="footer-socials-link" target="_blank">
                                    <img src="/images/pages/main/socials/vk.png" class="img-fluid">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-auto col-8">
                            <div style="padding-bottom: 1rem;">
                            на  <a href="{{ env('LINK_DEMETRIUS_YOUTUBE') }}" class="footer-socials-link" target="_blank">ютубе</a>
                            </div>
                            <div>
                                <a href="{{ env('LINK_DEMETRIUS_YOUTUBE') }}" class="footer-socials-link" target="_blank">
                                    <img src="/images/pages/main/socials/youtube.png" class="img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

