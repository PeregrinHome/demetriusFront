<?php
/**
 * @var \App\Models\Reviews\Review $review
 */
?>
<div class="mt-5 mb-5 row flex-row d-flex no-gutters justify-content-between">
    <div class="col-lg-8 offset-lg-2">
        <p class="mb-2 color-gray-v1" style="padding-left: calc(2rem + 9px);">{{ $review->getCreatedDate() }}</p>
        <div class="review__bg">
            <div class="review__bg-inner" style="padding-bottom: 2rem;">
                <div class="review__bg-top"></div>
                <div class="review__bg-bottom"></div>
                <div class="review__bg-right"></div>
                <div class="review__text ">
                    <div class="mb-0 js-text--truncate">
                        <div class="js-text--truncate--metka">
                            {!!  $review->getText() !!}
                        </div>
                    </div>

                </div>
            </div>
            <div class="review__author">
                {{ $review->getName() }}
            </div>
        </div>
    </div>
</div>