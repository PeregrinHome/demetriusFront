<div class="col-12 col-md-6 col-lg-3 pb-5">
    <div class="section__discount__text pr-3">
        <p class="font-pt-sans mainpage-span-4 line-height-1-2" data-toggle="collapse" href="#collapse-discount-{!! $id ?? null !!}" role="button" aria-expanded="false" aria-controls="collapse-discount-{!! $id ?? null !!}">
            {!! $title_noborder ?? null !!}<span class="border-bottom-dashed section__discount__text__collapse-btn">{!! $title_border ?? null !!}</span>
        </p>
    </div>
    <div class="collapse" id="collapse-discount-{!! $id ?? null !!}">
        <div class="card card-body border-none pt-0 pl-2 pr-2">
            {!! $description ?? null !!}
        </div>
    </div>
    <div class="section__discount__action">
        <div class="d-flex flex-column bg-yellow-d" >
            <div class="section__discount__action__img red">
                <img class="img-fluid" src="{!! $img ?? null !!}" alt="discount-1">
            </div>
            <div class="padding-top-2_5 padding-bottom-2_5 display-center">
                <a {!! $btn_attr ?? null !!} data-btntitle="Записаться"
                   data-inputbox="{{ json_encode([[ 'name' => 'user_type_id', 'value' => '2']]) }}" style="cursor: pointer; color: white;" class="btn btn-danger btn-primary--gradient">Записаться сейчас</a>
            </div>
        </div>
    </div>
</div>