{{--  В данную форму еще требуется input с name='user_type_id'
user_type_id = 1 модель
user_type_id = 2 ученик

--}}

<div class="form-inline pb-3">
    @include('forms._input',[
'name'=>"request_name",
'label'=>"Как к вам обращаться?",
'class'=>'outline-none border-top-0 border-bottom-gray border-left-0 border-right-0 box-shadow-none fg-1 border-radius-0',
'labelClass'=>'color-gray-v1 pr-3',
'classFormGroup' => 'w-100',
'placeholder' => ''])
</div>

<div class="form-inline pb-3">
    @include('forms._input',[
'name'=>"request_phone_raw",
'label'=>"Телефон",
'class'=>'js-phone-mask outline-none border-top-0 border-bottom-gray border-left-0 border-right-0
box-shadow-none fg-1 border-radius-0',
'labelClass'=>'color-gray-v1 pr-3',
'classFormGroup' => 'w-100',
'placeholder' => ''])
</div>
