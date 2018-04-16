<div class="embed-responsive embed-responsive-21by9">
    <div class="embed-responsive-item">
        <a class="text-decoration-none" data-toggle="lightbox" href="https://www.youtube.com/watch?v={{ $videoId ?? null }}">
            <div class="w-100 h-100 images-cover video-hover-icon" style="background-image: url({{ $url ?? null }});">
                <p class="p-2 text-light text-truncate">{{ $title ?? null }}</p>
            </div>
        </a>
    </div>
    {{--<iframe class="embed-responsive-item"--}}
            {{--src="https://www.youtube.com/embed/{{ $videoId ?? null }}"--}}
            {{--frameborder="0"--}}
            {{--gesture="media"--}}
            {{--allow="encrypted-media"--}}
            {{--allowfullscreen></iframe>--}}
</div>