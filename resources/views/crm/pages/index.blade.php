@extends('crm.layouts.app')

@section('content')
    <style>
        body {
            margin-bottom: 10rem;
        }
        .footer__welcome-cookies {
            text-align: center;
            color:#999;
            font-size: 60%;
        }

        .footer__welcome-copyright {
            text-align: center;
        }

        .welcome__welcome-img {
            margin-top: 2rem;
        }

        .footer__welcome {
            padding-top: 2rem;
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 8rem;
            background-color: #f5f5f5;
        }
        .welcome__h1 {
            padding-top: 2rem;
            padding-bottom: 1rem;
        }
    </style>


    <div class="container">
        <h1>Добро пожаловать в «Деметриус CRM»</h1>
    </div>

    <footer class="footer__welcome">
        <div class="container">
            <p class="footer__welcome-cookies">
                На нашем сайте мы используем cookie, данные об IP-адресе и местоположении для сбора информации технического характера в соответствии с политикой организации по обработке персональных данных .

            </p>
            <p class="footer__welcome-copyright">
                Разработано в <a href="https://batyukovstudio.com">Студии Евгения Батюкова</a>
            </p>
        </div>

    </footer>

@endsection
