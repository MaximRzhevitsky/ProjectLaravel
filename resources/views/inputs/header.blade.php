@section('header')
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container"><a href={{route('home')}} class="navbar-brand">Lara2</a>
        <div class="d-flex ml-auto">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#globalNavbar" aria-controls="globalNavbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        </div>
        <div class="collapse navbar-collapse" id="globalNavbar">
            <form class="form-inline form-navbar my-2 my-lg-0 order-2" action="https://themes.getbootstrap.com/shop/">
                <input class="form-control" name="s" type="text" placeholder="Search">
            </form>
            <ul class="navbar-nav mr-auto order-1">
                <li class="nav-item"><a class="nav-link" href={{route('about')}}>Обо мне</a></li>
                <li class="nav-item"><a class="nav-link" href={{route('posts-data')}}>Все посты</a></li>
            </ul>

            <ul class="navbar-nav d-none d-lg-flex ml-2 order-3">
                <li class="nav-item"><a  class="nav-link" href="{{ route('login') }}">Вход</a></li>
                <li class="nav-item"><a  class="nav-link"  href="{{ route('register') }}">Регистрация</a></li>
            </ul>
        </div>
    </div>
</nav>