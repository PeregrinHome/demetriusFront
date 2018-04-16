<?php
/**
 * @var App\Models\Videos\Video $video
 */
?>
@extends('site.layouts.app')

@section('content')



    <div class="template__grid-posts">
        <div class="container">
            <div class="row justify-content-center">
                @forelse($videos as $video)
                    <div class="col-12 col-md-6 zoomIn animated">
                        <div class="template__grid-posts__item">
                            <div class="template__grid-posts__item__wrap-img">
                                <div class="template__item-responsive template__item-responsive--size-16k9">
                                    <div class="template__item-responsive--content">
                                        <a data-toggle="lightbox" href="https://www.youtube.com/watch?v={{ $video->id->videoId }}">
                                            <div class="template__grid-posts__item__img images-cover video-hover-icon" style="background-image:url('{!! $video->snippet->thumbnails->high->url !!}');"></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="template__grid-posts__item__text bg-white">
                                <p class="articlepage-p4 text-dark font-pt-sans text-uppercase margin-none padding-1-rem">
                                    {{ $video->snippet->title }}
                                    {{--<a href="#" class="text-light link-underline">Максим воробьев</a> об идеальном каре + длинное описание для проверки--}}
                                </p>
                            </div>
                        </div>
                    </div>

                @empty
                    <h3>Видео нет.</h3>
                @endforelse

            </div>
        </div>
    </div>

@endsection
