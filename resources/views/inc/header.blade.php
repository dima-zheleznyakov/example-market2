<header>
    <nav class="navbar navbar-expand-md fixed-top">
        <div class="container">
            <div class="logo">
                <a class="navbar-brand" href="/"><img src="/img/logo.png" alt=""></a>
                <a class="logo-text" href="/"><span>Growth </span><span>pharmaceutical </span><span>company </span></a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <i></i>
                    <i></i>
                    <i></i>
                </span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Главная</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link nav-link-laptop dropdown-toggle" href="/catalog" id="navbarScrollingDropdown" >
                            Продукция
                        </a>
                        <a class="nav-link  nav-link-mobile dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Продукция
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            @foreach($menuCatalog as $catalog)
                                <li><a class="dropdown-item" href="/catalog/{{ $catalog->id }}">{{ $catalog->title }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Контакты</a>
                    </li>
                </ul>
                <!--            <form class="form-inline mt-2 mt-md-0">-->
                <!--                <input class="form-control mr-sm-2" type="text" placeholder="Поиск" aria-label="Search">-->
                <!--                <button class="btn my-2 my-sm-0" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>-->
                <!--            </form>-->
            </div>
        </div>
    </nav>
</header>


<main role="main">









