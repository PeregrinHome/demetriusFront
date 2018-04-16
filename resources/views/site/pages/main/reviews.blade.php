<section id="reviews" class="reviews">
    <h2 class="mainpage-h2">Отзывы учеников</h2>

    <?php
        $review1 = $reviews->shift();
        $review2 = $reviews->shift();
        $review3 = $reviews->shift();
    ?>

    @include('site.pages.main.reviews.reviewOne',['text'=>$review1->getText()
                         ,'author'=>$review1->getName()])
    <section class="videos">
        <div class="row no-gutters">
            @for ($i = 0; $i < 2; $i++)
                <div class="col-6">
					<?php
					$video =  array_shift($videoReviews);
					?>
                    @include('site.pages.main.videos.21by9',[
                    'videoId'=>$video->contentDetails->videoId,
                    'url' => $video->snippet->thumbnails->high->url,
                    'title' => $video->snippet->title
                    ])
                </div>
            @endfor
        </div>
    </section>
    @include('site.pages.main.reviews.reviewOne',['text'=>$review2->getText()
                         ,'author'=>$review2->getName()])

    <section class="videos">
        <div class="row no-gutters">
            @for ($i = 0; $i < 2; $i++)
                <div class="col-6">
					<?php
					$video =  array_shift($videoReviews);
					?>
                    @include('site.pages.main.videos.21by9',[
                    'videoId'=>$video->contentDetails->videoId,
                    'url' => $video->snippet->thumbnails->high->url,
                    'title' => $video->snippet->title
                    ])
                </div>
            @endfor
        </div>
    </section>
    @include('site.pages.main.reviews.reviewOne',['text'=>$review3->getText()
                         ,'author'=>$review3->getName()])


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto padding-top-bottom-2">
                <a href="{{ route('reviews.index') }}" class="btn btn-outline-red border-width-2">
                    Еще отзывы
                </a>
            </div>
        </div>
    </div>

</section>