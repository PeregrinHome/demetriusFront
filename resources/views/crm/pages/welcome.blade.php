@extends('crm.layouts.app')

@section('content')
    <style>
        body {
            margin-bottom: 10rem;
        }

        .footer__welcome-cookies {
            text-align: center;
            color: #999;
            font-size: 60%;
        }

        .footer__welcome-copyright {
            text-align: right;
            font-size: .7rem;
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

    <section id="welcome-section" class="welcome__section">
        <div class="container">
            <div class="row d-flex justify-content-center" style="min-height: 100%">
                <div class="col-lg-8 align-self-center text-center">
                    <a href="http://demetrius-crm.ru">
                        <img src="/images/pages/welcome/welcome.gif"
                             width="730"
                             height="163"
                             class="img-fluid welcome__welcome-img"
                             alt="Школа концептуальной стрижки «Деметриус»">
                    </a>

                    <br><br>
                    <div class="row justify-content-center">
                        <div class="col-auto">
                            <p>
                                Проект demetrius.ru находится в разработке.
                            </p>

                            <p>
                                Пока мы работаем, посетите предыдущую версию проекта:
                            </p>

                            <div class="form-group">
                                <a href="http://demetrius.su/" class="btn btn-outline-primary">
                                    Посетить demetrius.su
                                </a>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <a href="http://beta.demetrius-crm.ru" class="btn btn-outline-dark">
                            Новый сайт <i class="fa fa-star" aria-hidden="true"></i>
                        </a>

                        <a href="http://crm.demetrius-crm.ru" class="btn btn-outline-dark">
                            CRM <i class="fa fa-cogs" aria-hidden="true"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <footer class="footer__welcome">
        <div class="container">
            <p class="footer__welcome-cookies">
                На нашем сайте мы используем cookie, данные об IP-адресе и местоположении для сбора информации
                технического характера в соответствии с политикой организации по обработке персональных данных .

            </p>
            <p class="footer__welcome-copyright">
                Разработано в <a href="https://batyukovstudio.com">Студии Евгения Батюкова</a><br>
                &copy; 2017-2018
            </p>    
        </div>

    </footer>

@endsection
