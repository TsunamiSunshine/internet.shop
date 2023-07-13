<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Интернет Магазин: Electronic @yield('title')</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/starter-template.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid ">
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" id="logo" href="{{ route('index') }}">
                        ЭЛЕКТРОНИК
                    </a>
                </div>
                <div id="navbar" class=" collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li @routeactive('index')><a href="{{ route('index') }}">Все товары</a></li>
                        <li @routeactive('categor*')><a href="{{ route('categories') }}">Категории</a>
                        </li>
                        <li @routeactive('basket*')><a href="{{ route('basket') }}">В корзину</a></li>
                        <li><a href="{{ route('reset') }}">RESET</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        @guest
                            <li><a class="my-button" href="{{ route('login') }}">Войти</a></li>
                            <li><a href="{{ route('register') }}">Регистрация</a></li>
                        @endguest

                        @auth
                            @admin
                                <li><a href="{{ route('home') }}">Панель администратора</a></li>
                            @else
                                <li><a href="{{ route('person.orders.index') }}">Мои заказы</a></li>
                            @endadmin
                            <li><a href="{{ route('get-logout') }}">Выйти</a></li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="starter-template">
                @if (session()->has('success'))
                    <p class="alert alert-success">{{ session()->get('success') }}</p>
                @endif
                @if (session()->has('warning'))
                    <p class="alert alert-warning">{{ session()->get('warning') }}</p>
                @endif

                @yield('content')

            </div>
        </div>
        <footer class="bg-dark text-center text-white align-items-end">

                <form action="">
                    <div class="row d-flex justify-content-center">
                        <div id="logo" class="col-md-3">
                            <p class="pt-4">
                                ЭЛЕКТРОНИК
                            </p>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label" for="form5Example29">Служба поддержки :</label>
                            <p class="pt-4"> Телефон : +01-234-567-88 | Почта : example@mail.com
                            </p>
                        </div>

                        <div class="col-md-1">
                            <p class="pt-4">
                                <strong>Подпишитесь на нашу рассылку новостей!</strong>
                            </p>
                        </div>
                        <div class="col-md-2 col-12">

                            <div class="form-outline form-white mb-2">
                                <input type="email" placeholder="Ваш email ..." id="form5Example29" class="form-control" />

                            </div>
                        </div>
                        <div class="col-md-1 col-12">
                            <label class="form-label" for="form5Example29"></label>
                            <button type="submit" class="btn btn-outline-light btn-warning mb-4">
                                Подписаться
                            </button>
                        </div>
                    </div>
                </form>




            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2023 Copyright:
                <a class="text-white" style="text-decoration: none; color:#f0ad4e" href="">electronic-tech.com</a>
            </div>

        </footer>
    </div>
</body>

</html>
