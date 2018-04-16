<?php
/**
 * @var \App\Models\Users\User $trainer
 */
?>
@extends('layouts.app')

@section('content')



    <section id="section__our-team" class="section__our-team pt-5 pb-5 overflow-hidden">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12"><h2 class="mainpage-h2 color-black">Тренеры</h2></div>

                @forelse($trainers as $trainer)
                <div class="col-12 col-sm-4 col-md-3 col-lg-2 pb-4 zoomIn animated">
                    <a href="{{ route('trainers.show', $trainer) }}">
                        <div class="d-flex flex-column align-items-center" style="padding: 0rem 2rem;">
                            <img class="" style="height: 14rem;" src="{{ $trainer->getAvatarLink() ?? '/images/static/none.png' }}" alt="{{ $trainer->getName() }}">
                            <div class="d-flex justify-content-center padding-top-1-rem">
                                <div>
                                    <p class="font-pt-sans text-center">{{ $trainer->getFirstName() ?? null }}<br>{{ $trainer->getLastName() ?? null }}</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @empty
                @endforelse
            </div>
        </div>
    </section>

@stop