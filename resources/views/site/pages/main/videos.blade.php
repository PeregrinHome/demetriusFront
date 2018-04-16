<?php
/**
 * @var App\Models\Videos\Video $video
 */
?>
<section id="videos" class="videos">
    <div class="padding-top-bottom-2">
        <h2 class="mainpage-h2 ">Новые видео</h2>
    </div>
    <!-- 21:9 aspect ratio -->
    <div class="row no-gutters">
    @forelse($lastVideos as $video)
        @if ($loop->first)
        <div class="col-12">
            <div class="embed-responsive embed-responsive-21by9">
                <div class="embed-responsive-item">
                    <a class="text-decoration-none" data-toggle="lightbox" href="https://www.youtube.com/watch?v={{ $video->id->videoId }}">
                        <div class="w-100 h-100 images-cover video-hover-icon" style="background-image: url({!! $video->snippet->thumbnails->high->url !!});">
                            <p class="p-2 text-light text-truncate">{{ $video->snippet->title }}</p>
                        </div>
                    </a>
                </div>
                {{--<iframe class="embed-responsive-item"--}}
                        {{--src="https://www.youtube.com/embed/{{ $video->id->videoId }}"--}}
                        {{--frameborder="0"--}}
                        {{--gesture="media"--}}
                        {{--allow="encrypted-media"--}}
                        {{--allowfullscreen></iframe>--}}
            </div>
        </div>
            @else
                <div class="col-lg-3 col-6">
                    <div class="embed-responsive embed-responsive-16by9">
                        <div class="embed-responsive-item">
                            <a class="text-decoration-none" data-toggle="lightbox" href="https://www.youtube.com/watch?v={{ $video->id->videoId }}">
                                <div class="w-100 h-100 images-cover video-hover-icon" style="background-image: url({!! $video->snippet->thumbnails->high->url !!});">
                                    <p class="p-2 text-light text-truncate">{{ $video->snippet->title }}</p>
                                </div>
                            </a>
                        </div>
                        {{--<iframe class="embed-responsive-item"--}}
                                {{--src="https://www.youtube.com/embed/{{ $video->id->videoId }}"--}}
                                {{--frameborder="0"--}}
                                {{--gesture="media"--}}
                                {{--allow="encrypted-media"--}}
                                {{--allowfullscreen></iframe>--}}
                    </div>
                </div>

            @endif


        @empty
    Заглушечка, если ютюб упал.
    @endforelse
    </div>

</section>