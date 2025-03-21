<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggle-icon"></span>
            </button>
            <div class="collapse navbar-collapse"  id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
{{--                        @auth--}}
{{--                            <li class=" nav-item nav-link">Авторизован</li>--}}
{{--                            @else--}}
{{--                        <li class=" nav-item nav-link">войдите</li>--}}
{{--                        @endauth--}}

{{--                    @guest--}}
{{--                        <li class=" nav-item nav-link">вы гость</li>--}}
{{--                    @endguest--}}
                        @guest
                        <a @class(["nav-link", "active" => \Illuminate\Support\Facades\Route::is("login.index")]) href="{{route("login.index")}}">Войти</a>
                    <li class="nav-item">
                        <a @class(["nav-link", "active" => \Illuminate\Support\Facades\Route::is("register.index")]) href="{{route("register.index")}}">Регистрация</a>
                    </li> @else
                        <li class="nav-item">
                            <a @class(["nav-link", "active" => \Illuminate\Support\Facades\Route::is("orders.index")]) href="{{route("orders.index")}}">Заказы</a>
                        </li>
                    <li class="nav-item">
                        <a href="{{route("login.logout")}}" class="nav-link">Выход</a>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</header>

{{--@dump(\Illuminate\Support\Facades\Auth::user())--}}
