@extends('crm.layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
    <div class="col-md-6 text-center">
        <h1>Авторизация</h1>
        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}

            @include('forms._input',[
            'type'=>'email',
            'required'=>'true',
            'label'=>'Электронная почта',
            'name'=>'email',
            'class'=>'text-center',
            ])

           @include('forms._input',[
           'name'=>'password',
           'required'=>'true',
           'label'=>'Пароль',
           'class'=>'text-center',
           'type'=>'password',
           ])

            <div class="form-group">
                <div class="col-md-12">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Запомнить меня
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">
                        Войти
                    </button>

                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        Забыли пароль?
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>


</div>
@endsection
