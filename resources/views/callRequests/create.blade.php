@extends('site.layouts.app')

@section('content')


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 pt-4 pb-5">
                <h2 class="mainpage-h2 font-oswald font-weight-light">Запрос на звонок</h2>
                {{ Form::open(['route'=>"call-requests.store",'method'=>'POST']) }}

                @include('callRequests._form')

                <div class="text-center pt-5">
                    <button class="btn btn-danger btn-primary--gradient">
                       Записаться
                    </button>
                </div>

                {{ Form::close() }}
            </div>
        </div>
    </div>

@endsection
