<header id="header">
<div class="container">
    <div class="header">
        <div class="header-top-wrapper">
            <div class="header-top">
                <div class="exchange-rates">
                    <div class="usd">
                        <img class="currency" src="{{ asset('img/icon/dollar.svg')}}">
                        <p>420,76</p>
                        <img class="exchange-cursor" src="{{ asset('img/icon/cursor-up.svg')}}">
                    </div>
                    <div class="euro">
                        <img class="currency" src=" {{ asset('img/icon/euro.svg')}}">
                        <p>420,76</p>
                        <img class="exchange-cursor" src=" {{ asset('img/icon/cursor-down.svg')}}">
                    </div>
                </div>
                <div class="ticker">
                    @foreach($categories as $cat)
                    <a class="ticker-item" href="{{ url('category')}}/{{$cat->slug}}" class="text-uppercase">{{$cat->title}}</a>
                    @endforeach
                    
                </div>
                <a class="link-call" href="tel:+78000040420">
                    <i class="icon icon-call"></i>
                    <span>8 800 004 04 20</span>
                    <p>(@lang('main.schedule'))</p>
                </a>
                @foreach (config('translatable.locales') as $locale)
                            <a href="{{ request()->url() }}?language={{ $locale }}"
                               class="@if (app()->getLocale() == $locale) border-indigo-400 @endif inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium leading-5 focus:outline-none transition duration-150 ease-in-out">
                                [{{ strtoupper($locale) }}]
                            </a>
                            @endforeach
            </div>
        </div>
        <div class="header-bottom">
            <button class="call-menu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="logo" href="{{url('/main')}}">
                <img src=" {{ asset('img/logo.svg')}}">
            </a>
            <div class="weather">
                <img src=" {{ asset('img/icon/weather-shine.svg')}}">
                <p>+29°</p>
                <div class="weather-city">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">@lang('main.almaty')</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">@lang('main.almaty')</a>
                        <a class="dropdown-item" href="#">@lang('main.almaty')</a>
                        <a class="dropdown-item" href="#">@lang('main.almaty')</a>
                        <a class="dropdown-item" href="#">@lang('main.almaty')</a>
                        <a class="dropdown-item" href="#">@lang('main.almaty')</a>
                        <a class="dropdown-item" href="#">@lang('main.almaty')</a>
                        <a class="dropdown-item" href="#">@lang('main.almaty')</a>
                        <a class="dropdown-item" href="#">@lang('main.almaty')</a>
                        <a class="dropdown-item" href="#">@lang('main.almaty')</a>
                        <a class="dropdown-item" href="#">@lang('main.almaty')</a>
                    </div>
                </div>
            </div>
            <div class="search-wrapper">
                <div class="search">
                    <form action = '{{ url('search')}}' method='GET'>
                    <button class="search-btn">
                        <img src=" {{ asset('img/icon/loupe.svg')}}">
                    </button>
                    <input type="text" name='searchData'   placeholder="@lang('main.search')">
                    </form>
                </div>
            </div>
            <a class="new-note" href="#">
                <img src=" {{ asset('img/icon/pen-edit-white.svg')}}">
                <p>@lang('main.post')</p>
            </a>
            <a class="profile" href="#">
                <img src=" {{ asset('img/icon/profile-icon.svg')}}">
                <p>@lang('main.login')</p>
            </a>
            <div class="login">
                <form action="#">
                    <div class="authorize-close-wrapper d-none">
                        <a class="authorize-close" href="#">
                            <svg width="15" height="15" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 11L11 1M1 1L11 11" stroke="#8D8F9B"/>
                            </svg>
                        </a>
                    </div>
                    <div class="authorize-form">
                        <span>E-mail</span>
                        <input type="email">
                    </div>
                    <div class="authorize-form">
                        <span>Пароль</span>
                        <input type="password">
                    </div>
                    <div class="pwd-save">
                        <label class="pwd-switch">
                            <input type="checkbox">
                            <span class="slider"></span>
                        </label>
                        <p>Парольді сақтау</p>
                    </div>
                    <div class="login-bottom">
                        <a class="login-btn" href="#">Кіру</a>
                        <a class="registration-switch" href="#">Тіркелу</a>
                    </div>
                </form>
            </div>
            <div class="registration">
                <form action="#">
                    <div class="authorize-close-wrapper d-none">
                        <a class="authorize-close" href="#">
                            <svg width="15" height="15" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 11L11 1M1 1L11 11" stroke="#8D8F9B"/>
                            </svg>
                        </a>
                    </div>
                    <div class="change-user">
                        <button class="change-user-btn active">Автор</button>
                        <button class="change-user-btn">Компания</button>
                    </div>
                    <div class="authorize-form">
                        <span>Атыңыз</span>
                        <input type="text">
                    </div>
                    <div class="authorize-form">
                        <span>E-mail</span>
                        <input type="email">
                    </div>
                    <div class="authorize-form">
                        <span>Пароль</span>
                        <input type="password">
                    </div>
                    <div class="registration-img">
                        <input type="file">
                        <div class="registration-img-load">
                            <p>Фотоны жүктеу</p>
                            <img src="{{ asset('img/icon/load.svg')}}">
                        </div>
                    </div>
                    <div class="registration-img-info">Максимум 1мб</div>
                    <div class="registration-bottom">
                        <a class="registration-btn" href="#">Тіркелу</a>
                        <a class="back-btn" href="#">
                            <img src=" {{ asset('img/icon/cursor-left.svg')}}">
                            <p>Артқа</p>
                        </a>
                    </div>
                </form>
            </div>
            <a class="logout d-none" href="#">
                <img src=" {{ asset('img/icon/logout.svg')}}">
            </a>
        </div>
    </div>
</div>
</header>
