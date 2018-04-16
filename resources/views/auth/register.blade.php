@extends('crm.layouts.app')

@section('content')
<div class="container">


                    <div class="row justify-content-center">
                        <div class="col-md-6 text-center">
                            <h1>Регистрация</h1>
                            <form  method="POST" class="text-center" action="{{ route('register') }}">
                                {{ csrf_field() }}
    @include('forms._input',[
    'name'=>'l_name',
    'class'=>'text-center',
    'label'=>'Фамилия',
    'required'=>'true',
    ])

                                @include('forms._input',[
   'name'=>'f_name',
   'class'=>'text-center',
   'label'=>'Имя',
   'required'=>'true',
   ])

                                @include('forms._input',[
   'name'=>'m_name',
   'class'=>'text-center',
   'label'=>'Отчество',
   'required'=>'true',
   ])

                                @include('forms._input',[
   'name'=>'email',
   'class'=>'text-center',
   'label'=>'Электронная почта',
   'required'=>'true',
   'type'=>'email',
   ])


                                @include('forms._input',[
   'name'=>'phone',
   'class'=>'text-center phone-mask',
   'label'=>'Телефон',
   'required'=>'true',
   'type'=>'phone',
   ])



                                @include('forms._input',[
'name'=>'password',
'class'=>'text-center',
'label'=>'Пароль',
'required'=>'true',
'type'=>'password',
])

                                @include('forms._input',[
'name'=>'password_confirmation',
'class'=>'text-center',
'label'=>'Повторите пароль',
'required'=>'true',
'type'=>'password',
])





                                <div class="form-group">
                                        <button type="submit" class="btn btn-primary form-control">
                                            Зарегистрироваться
                                        </button>
                                </div>
                            </form>
                        </div>
                    </div>
</div>
@endsection
