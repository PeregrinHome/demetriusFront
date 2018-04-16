
<div class="row justify-content-around">
    <div class="col-auto">
        @include('forms._radio',[
'name'=>'user_type_id',
'value'=>1,
'label'=>'Запись мастером'
])
    </div>
    <div class="col-auto">
        @include('forms._radio',[
                         'name'=>'user_type_id',
                         'value'=>2,
                         'label'=>'Запись моделью'
                         ])
    </div>
</div>
