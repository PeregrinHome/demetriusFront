<style>
    .trainer:active, .trainer:hover {
        /*background: #b40000;*/
        /*background: -moz-linear-gradient(top, #b40000 0%, #cc0000 18%, #cc0000 100%);*/
        /*background: -webkit-linear-gradient(top, #b40000 0%, #cc0000 18%, #cc0000 100%);*/
        background: linear-gradient(to bottom, #b40000 0%, #cc0000 18%, #cc0000 100%);
        /*filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#b40000', endColorstr='#cc0000', GradientType=0);*/
        color: {{ $colorHover ?? 'white' }};
        border-color: #333333;
        transition: all .5s;
    }



    .trainer {
        background: #f6f5f6;
        padding-top: 2rem;
        padding-bottom: 2rem;
        color: {{ $color ?? 'white' }};
        overflow: hidden;
        transition: all .5s;
    }

    .trainer__date {
        width: 100%;
        border-right: 5px solid {{ $lineColor ?? 'white' }};
    }

    .trainer:hover  .trainer__date,.trainer:focus  .trainer__date {
        border-right: 5px solid {{ $lineColorHover ?? 'black' }};
    }

            


</style>
@push('scripts')
    <script>
        "use strict";
        var trainerClass = '.trainer__{{ str_slug($name) }}';
        $(trainerClass).hover(function () {
            $(this).find('.trainer__photo').attr('src','{{ $imageDynamic ?? '' }}');
        }, function () {
            $(this).find('.trainer__photo').attr('src','{{  $imageStatic ?? ''}}');
        });
    </script>
@endpush

<a href="{{ Route("trainers") }}">
<div class="trainer trainer__{{ str_slug($name) }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 align-self-center">
                <div class="trainer__date">
                    {{ strftime('%e %b. %G',strtotime($date)) }}
                    <br> {{ strftime('%a. %H:%M',strtotime($date)) }}
                    <br>{{ \Illuminate\Support\Carbon::parse($date)->diffForHumans() }}
                </div>

            </div>
            <div class="col-lg-5 align-self-center">
                <div style="font-size:1.2rem">
                    {!!  $description ?? null !!}
                </div>
                @if(isset($freePlaces) && $freePlaces > 0)
                    <div class="trainer__free-places">
                        Осталось {{ $freePlaces }} места
                    </div>
                    @else
                    <div class="trainer__free-places">
                       Мест нет
                    </div>
                @endif
            </div>
            <div class="col-lg-4">
                <div class="row text-center no-gutters">
                    <div class="col-6 align-self-center z-index-2">
                        <div class="trainer__name">
                            {{ $name ?? '' }}
                        </div>
                    </div>
                    <div class="col-6 z-index-1">
                        <img src="{{ $imageStatic ?? '' }}"
                             class="trainer__photo trainer__photo--static d-block">
                        <img src="{{ $imageDynamic ?? '' }}" class="d-none">
                    </div>
                </div>


            </div>
        </div>

    </div>
</div>
</a>