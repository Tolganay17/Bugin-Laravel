@extends('main.index')
@section('home_content')
<div class="container">
    <div class="top-news">
        <div class="top-news-left">
            
            <div class="news-slider-wrapper">
                @foreach ($kogam as $k)
                <div class="news-slider">
                    
                   <div class="news-slider-img">
                        <img src="{{ asset('uploads/'.$k->image)}}">
                    </div>
                    <a href="{{url('article')}}/{{$k->slug}}">
                        <div class="news-slider-caption">
                            <h2>{{$k->{'title_'.app()->getLocale()} }}</h2>
                            <span>2 сағат бұрын</span>
                        </div>
                    </a>
                    <a class="cats society" href="{{url('article')}}/{{$k->slug}}">{{$k->category->title}}</a>
          
                </div>
                @endforeach
            </div>
            
            <ul class="nav news-slider-arrows">
                <li class="nav-item">
                    <button class="news-slider-prev">
                        <img src=" {{ asset('img/icon/cursor-left.svg')}}">
                    </button>
                </li>
                <li class="nav-item">
                    <button class="news-slider-next">
                        <img src=" {{ asset('img/icon/cursor-right.svg')}}">
                    </button>
                </li>
            </ul>
          
        </div>
        
        <div class="sm-news-wrapper">
            
            @foreach($weeken as $w)

          <div class="sm-news-item">
               
                 <a href="{{url('article')}}/{{$w->slug}}">
                    <div class="sm-news">
                        <div class="sm-news-img">
                            <img src=" {{ asset('uploads/'.$w->image)}}">
                        </div>
                        <div class="sm-news-caption">
                            <h2>{{$w->title}}</h2>
                            <span>2 сағат бұрын</span>
                            <span>
                                <i class="icon icon-b"></i>
                            </span>
                            <span>10К</span>

                        </div>
                    </div>
                </a>
                <a class="holding-link" href="#">Bugin Holding</a>
                <a class="cats weekend" href="{{ url('category')}}/{{$w->category->slug}}">{{$w->category->title}}</a>
                
            </div>
          
            @endforeach
        </div>
    </div>
</div>
</section>

<section id="author">
<div class="container">
    <div class="author">
        <div class="author-top">
            <h1 class="section-title">Авторлар</h1>
           
        </div>
        <div class="author-item-wrapper">
            <div class="author-item">
                <a href="#">
                    <div class="author-img-wrapper">
                        <div class="author-img unvisited"></div>
                        <img  src=" {{ asset('img/content/author-img.png')}}">
                    </div>
                </a>
                <div class="author-name">
                    <p>Асхат Қасенғали</p>
                </div>
            </div>
            <div class="author-item">
                <a href="#">
                    <div class="author-img-wrapper">
                        <div class="author-img unvisited"></div>
                        <img  src=" {{ asset('img/content/author-img.png')}}">
                    </div>
                </a>
                <div class="author-name">
                    <p>Асхат Қасенғали</p>
                </div>
            </div>
            <div class="author-item">
                <a href="#">
                    <div class="author-img-wrapper">
                        <div class="author-img unvisited"></div>
                        <img  src=" {{ asset('img/content/author-img.png')}}">
                    </div>
                </a>
                <div class="author-name">
                    <p>Асхат Қасенғали</p>
                </div>
            </div>
            <div class="author-item">
                <a href="#">
                    <div class="author-img-wrapper">
                        <div class="author-img visited"></div>
                        <img  src=" {{ asset('img/content/author-img.png')}}">
                    </div>
                </a>
                <div class="author-name">
                    <p>Асхат Қасенғали</p>
                </div>
            </div>
            <div class="author-item">
                <a href="#">
                    <div class="author-img-wrapper">
                        <div class="author-img visited"></div>
                        <img  src=" {{ asset('img/content/author-img.png')}}">
                    </div>
                </a>
                <div class="author-name">
                    <p>Асхат Қасенғали</p>
                </div>
            </div>
            <div class="author-item">
                <a href="#">
                    <div class="author-img-wrapper">
                        <div class="author-img visited"></div>
                        <img  src=" {{ asset('img/content/author-img.png')}}">
                    </div>
                </a>
                <div class="author-name">
                    <p>Асхат Қасенғали</p>
                </div>
            </div>
            <div class="author-item">
                <a href="#">
                    <div class="author-img-wrapper">
                        <div class="author-img visited"></div>
                        <img  src=" {{ asset('img/content/author-img.png')}}">
                    </div>
                </a>
                <div class="author-name">
                    <p>Асхат Қасенғали</p>
                </div>
            </div>
            <div class="author-item">
                <a href="#">
                    <div class="author-img-wrapper">
                        <div class="author-img visited"></div>
                        <img  src=" {{ asset('img/content/author-img.png')}}">
                    </div>
                </a>
                <div class="author-name">
                    <p>Асхат Қасенғали</p>
                </div>
            </div>
            <div class="author-item">
                <a href="#">
                    <div class="author-img-wrapper">
                        <div class="author-img visited"></div>
                        <img  src=" {{ asset('img/content/author-img.png')}}">
                    </div>
                </a>
                <div class="author-name">
                    <p>Асхат Қасенғали</p>
                </div>
            </div>
            <div class="author-item">
                <a href="#">
                    <div class="author-img-wrapper">
                        <div class="author-img visited"></div>
                        <img  src=" {{ asset('img/content/author-img.png')}}">
                    </div>
                </a>
                <div class="author-name">
                    <p>Асхат Қасенғали</p>
                </div>
            </div>
            <div class="author-item">
                <a href="#">
                    <div class="author-img-wrapper">
                        <div class="author-img visited"></div>
                        <img  src=" {{ asset('img/content/author-img.png')}}">
                    </div>
                </a>
                <div class="author-name">
                    <p>Асхат Қасенғали</p>
                </div>
            </div>
            <div class="author-add">
                <a href="#">
                    <img src=" {{ asset('img/icon/plus.svg')}}">
                </a>
                <div class="author-name">
                    <p>Авторларға қосылу</p>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<section class="banner">
<div class="container">
    <a href="#">
        <div class="banner-add">
            <img src=" {{ asset('img/banner.png')}}">
        </div>
    </a>
</div>
</section>

<section id="news">
<div class="container">
    <div class="news">
        <div class="news-article">
            <div class="news-header">
                <a class="all-news" href="#">
                    Барлық жаңалықтар
                </a>
                <a class="my-news" href="#">
                    <img src=" {{ asset('img/icon/lock.svg')}}">
                    Менің таңдауым (<span>Kipy</span>)
                </a>
                <a class="my-news-xs d-none" href="#">
                    <img src=" {{ asset('img/icon/lock.svg')}}">
                    Менің таңдауым
                </a>
                <a class="news-setting" href="#">
                    <img src=" {{ asset('img/icon/setting.svg')}}">
                </a>
            </div>
            <div class="news-item-wrapper">
                @foreach($weeken as $w)
                <div class="news-item">
                    <div class="news-item-img">
                        <a href="#">
                            <img src="{{ asset('uploads/'.$w->image)}}">
                        </a>
                    </div>
                    <a href="#">
                        <div class="news-item-caption">
                            <h2>{{$w->title}}</h2>
                            <ul class="nav news-item-meta">
                                <li class="nav-item">
                                    <p>Кеше</p>
                                </li>
                                <li class="nav-item">
                                    <span>|</span>
                                </li>
                                <li class="nav-item">
                                    <i class="cloud"></i>
                                    <p>0</p>
                                </li>
                                <li class="nav-item">
                                    <i class="eye"></i>
                                    <p>12452</p>
                                </li>
                            </ul>
                        </div>
                    </a>
                    <a class="cats sport" href="">{{$w->category->title}}</a>
                </div>
                @endforeach
               
            </div>
            <a class="news-item-uncover" href="#">
                <img src=" {{ asset('img/icon/uncover.svg')}}">
                <span>Тағы қарау</span>
            </a>
        </div>
        <div class="news-aside">
            <div class="dispute">
                <div class="dispute-header">
                    <img src=" {{ asset('img/icon/cloud.svg')}}">
                    <p>Талқылау</p>
                    <div class="switch-box">
                        <svg width="28" height="10" viewBox="0 0 28 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 10H6.531V8.27443H2.114V0H0V10Z" fill="#8D8F9B"/>
                            <path d="M7.784 10H9.898V0H7.784V10Z" fill="#8D8F9B"/>
                            <path d="M14.315 10H16.891L20.272 0H17.927L15.624 7.85863H15.582L13.272 0H10.934L14.315 10Z" fill="#8D8F9B"/>
                            <path d="M21.308 10H28V8.27443H23.422V5.75884H27.741V4.12335H23.422V1.72557H28V0H21.308V10Z" fill="#8D8F9B"/>
                        </svg>
                        <label class="switch">
                            <input type="checkbox" id="live_checkbox">
                            <span class="switch-slider"></span>
                        </label>
                    </div>
                </div>
                <div class="dispute-body">
                    <div class="dispute-item">
                        <div class="dispute-item-top">
                            <img src=" {{ asset('img/content/news-continuous-author1.png')}}">
                            <p>Kymbat Slyambekov</p>
                            <span>1 мин</span>
                        </div>
                        <div class="dispute-item-body">
                            <p>Магистральда келе жатқан әрбір көлік қазірдің өзінде ықтимал қауіп болып табылады.</p>
                        </div>
                        <div class="dispute-item-bottom">
                            <a href="#">Эксклюзив: “Хәрри Поттер мен Азкабан тұтқыны”. Бірінші тарау</a>
                        </div>
                    </div>
                    <div class="dispute-item">
                        <div class="dispute-item-top">
                            <img src=" {{ asset('img/content/news-continuous-author1.png')}}">
                            <p>Kymbat Slyambekov</p>
                            <span>1 мин</span>
                        </div>
                        <div class="dispute-item-body">
                            <p>Магистральда келе жатқан әрбір көлік қазірдің өзінде ықтимал қауіп болып табылады.</p>
                        </div>
                        <div class="dispute-item-bottom">
                            <a href="#">Эксклюзив: “Хәрри Поттер мен Азкабан тұтқыны”. Бірінші тарау</a>
                        </div>
                    </div>
                    <div class="dispute-item">
                        <div class="dispute-item-top">
                            <img src=" {{ asset('img/content/news-continuous-author1.png')}}">
                            <p>Kymbat Slyambekov</p>
                            <span>1 мин</span>
                        </div>
                        <div class="dispute-item-body">
                            <p>Магистральда келе жатқан әрбір көлік қазірдің өзінде ықтимал қауіп болып табылады.</p>
                        </div>
                        <div class="dispute-item-bottom">
                            <a href="#">Эксклюзив: “Хәрри Поттер мен Азкабан тұтқыны”. Бірінші тарау</a>
                        </div>
                    </div>
                    <div class="dispute-item">
                        <div class="dispute-item-top">
                            <img src=" {{ asset('img/content/news-continuous-author1.png')}}">
                            <p>Kymbat Slyambekov</p>
                            <span>1 мин</span>
                        </div>
                        <div class="dispute-item-body">
                            <p>Магистральда келе жатқан әрбір көлік қазірдің өзінде ықтимал қауіп болып табылады.</p>
                        </div>
                        <div class="dispute-item-bottom">
                            <a href="#">Эксклюзив: “Хәрри Поттер мен Азкабан тұтқыны”. Бірінші тарау</a>
                        </div>
                    </div>
                    <div class="dispute-item">
                        <div class="dispute-item-top">
                            <img src="{{ asset('img/content/news-continuous-author1.png')}}">
                            <p>Kymbat Slyambekov</p>
                            <span>1 мин</span>
                        </div>
                        <div class="dispute-item-body">
                            <p>Магистральда келе жатқан әрбір көлік қазірдің өзінде ықтимал қауіп болып табылады.</p>
                        </div>
                        <div class="dispute-item-bottom">
                            <a href="#">Эксклюзив: “Хәрри Поттер мен Азкабан тұтқыны”. Бірінші тарау</a>
                        </div>
                    </div>
                    <div class="dispute-item">
                        <div class="dispute-item-top">
                            <img src=" {{ asset('img/content/news-continuous-author1.png')}}">
                            <p>Kymbat Slyambekov</p>
                            <span>1 мин</span>
                        </div>
                        <div class="dispute-item-body">
                            <p>Магистральда келе жатқан әрбір көлік қазірдің өзінде ықтимал қауіп болып табылады.</p>
                        </div>
                        <div class="dispute-item-bottom">
                            <a href="#">Эксклюзив: “Хәрри Поттер мен Азкабан тұтқыны”. Бірінші тарау</a>
                        </div>
                    </div>
                    <div class="dispute-item">
                        <div class="dispute-item-top">
                            <img src=" {{ asset('img/content/news-continuous-author1.png')}}">
                            <p>Kymbat Slyambekov</p>
                            <span>1 мин</span>
                        </div>
                        <div class="dispute-item-body">
                            <p>Магистральда келе жатқан әрбір көлік қазірдің өзінде ықтимал қауіп болып табылады.</p>
                        </div>
                        <div class="dispute-item-bottom">
                            <a href="#">Эксклюзив: “Хәрри Поттер мен Азкабан тұтқыны”. Бірінші тарау</a>
                        </div>
                    </div>
                    <div class="dispute-item">
                        <div class="dispute-item-top">
                            <img src=" {{ asset('img/content/news-continuous-author1.png')}}">
                            <p>Kymbat Slyambekov</p>
                            <span>1 мин</span>
                        </div>
                        <div class="dispute-item-body">
                            <p>Магистральда келе жатқан әрбір көлік қазірдің өзінде ықтимал қауіп болып табылады.</p>
                        </div>
                        <div class="dispute-item-bottom">
                            <a href="#">Эксклюзив: “Хәрри Поттер мен Азкабан тұтқыны”. Бірінші тарау</a>
                        </div>
                    </div>
                    <div class="dispute-item">
                        <div class="dispute-item-top">
                            <img src=" {{ asset('img/content/news-continuous-author1.png')}}">
                            <p>Kymbat Slyambekov</p>
                            <span>1 мин</span>
                        </div>
                        <div class="dispute-item-body">
                            <p>Магистральда келе жатқан әрбір көлік қазірдің өзінде ықтимал қауіп болып табылады.</p>
                        </div>
                        <div class="dispute-item-bottom">
                            <a href="#">Эксклюзив: “Хәрри Поттер мен Азкабан тұтқыны”. Бірінші тарау</a>
                        </div>
                    </div>
                    <div class="dispute-item">
                        <div class="dispute-item-top">
                            <img src=" {{ asset('img/content/news-continuous-author1.png')}}">
                            <p>Kymbat Slyambekov</p>
                            <span>1 мин</span>
                        </div>
                        <div class="dispute-item-body">
                            <p>Магистральда келе жатқан әрбір көлік қазірдің өзінде ықтимал қауіп болып табылады.</p>
                        </div>
                        <div class="dispute-item-bottom">
                            <a href="#">Эксклюзив: “Хәрри Поттер мен Азкабан тұтқыны”. Бірінші тарау</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<section id="tv-news">
<div class="container">
    <div class="tv-news-header">
        <div class="tv-logo">
            <img src=" {{ asset('img/tv-logo.svg')}}">
        </div>
        <ul class="nav tv-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Барлығы</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Спорт</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Политика</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Экономика</a>
            </li>
        </ul>
        <ul class="nav tv-news-arrows">
            <li class="nav-item">
                <button class="tv-news-prev">
                    <img src=" {{ asset('img/icon/tv-slider-arrow-left.svg')}}">
                </button>
            </li>
            <li class="nav-item">
                <button class="tv-news-next">
                    <img src=" {{ asset('img/icon/tv-slider-arrow-right.svg')}}">
                </button>
            </li>
        </ul>
    </div>
</div>
<div class="tv-news-slider">
    <div class="tv-slide">
        <div class="tv-slide-img">
            <img src=" {{ asset('img/content/tv-slide1.png')}}">
        </div>
        <a href="#">
            <div class="tv-slide-caption">
                <h2>«Канело» сотта сәтсіздікке ұшырады. Головкин Альвареспен кездеспеуі мүмкін</h2>
                <ul class="nav news-item-meta">
                    <li class="nav-item">
                        <p>Кеше</p>
                    </li>
                    <li class="nav-item">
                        <span>|</span>
                    </li>
                    <li class="nav-item">
                        <i class="cloud"></i>
                        <p>0</p>
                    </li>
                    <li class="nav-item">
                        <i class="eye"></i>
                        <p>12452</p>
                    </li>
                </ul>
            </div>
        </a>
        <a class="tv-cats orange">Спорт</a>
    </div>
    <div class="tv-slide">
        <div class="tv-slide-img">
            <img src=" {{ asset('img/content/tv-slide2.png')}}">
        </div>
        <a href="#">
            <div class="tv-slide-caption">
                <h2>«Канело» сотта сәтсіздікке ұшырады. Головкин Альвареспен кездеспеуі мүмкін</h2>
                <ul class="nav news-item-meta">
                    <li class="nav-item">
                        <p>Кеше</p>
                    </li>
                    <li class="nav-item">
                        <span>|</span>
                    </li>
                    <li class="nav-item">
                        <i class="cloud"></i>
                        <p>0</p>
                    </li>
                    <li class="nav-item">
                        <i class="eye"></i>
                        <p>12452</p>
                    </li>
                </ul>
            </div>
        </a>
        <a class="tv-cats orange">Спорт</a>
    </div>
    <div class="tv-slide">
        <div class="tv-slide-img">
            <img src=" {{ asset('img/content/tv-slide1.png')}}">
        </div>
        <a href="#">
            <div class="tv-slide-caption">
                <h2>«Канело» сотта сәтсіздікке ұшырады. Головкин Альвареспен кездеспеуі мүмкін</h2>
                <ul class="nav news-item-meta">
                    <li class="nav-item">
                        <p>Кеше</p>
                    </li>
                    <li class="nav-item">
                        <span>|</span>
                    </li>
                    <li class="nav-item">
                        <i class="cloud"></i>
                        <p>0</p>
                    </li>
                    <li class="nav-item">
                        <i class="eye"></i>
                        <p>12452</p>
                    </li>
                </ul>
            </div>
        </a>
        <a class="tv-cats orange">Спорт</a>
    </div>
    <div class="tv-slide">
        <div class="tv-slide-img">
            <img src=" {{ asset('img/content/tv-slide2.png')}}">
        </div>
        <a href="#">
            <div class="tv-slide-caption">
                <h2>«Канело» сотта сәтсіздікке ұшырады. Головкин Альвареспен кездеспеуі мүмкін</h2>
                <ul class="nav news-item-meta">
                    <li class="nav-item">
                        <p>Кеше</p>
                    </li>
                    <li class="nav-item">
                        <span>|</span>
                    </li>
                    <li class="nav-item">
                        <i class="cloud"></i>
                        <p>0</p>
                    </li>
                    <li class="nav-item">
                        <i class="eye"></i>
                        <p>12452</p>
                    </li>
                </ul>
            </div>
        </a>
        <a class="tv-cats orange">Спорт</a>
    </div>
</div>
</section>

<!--<section id="intro">
<div class="container">
    <div class="intro">
        <div class="news-item">
            <div class="news-item-img">
                <a href="#">
                    <img src="img/content/intro-bg1.png">
                </a>
            </div>
            <a href="#">
                <div class="news-item-caption">
                    <h2>Шымкент әкімі жас ғалым ойлап тапқан залалсыздандыру технологиясымен таны...</h2>
                    <ul class="nav news-item-meta">
                        <li class="nav-item">
                            <p>Кеше</p>
                        </li>
                        <li class="nav-item">
                            <span>|</span>
                        </li>
                        <li class="nav-item">
                            <i class="cloud"></i>
                            <p>0</p>
                        </li>
                        <li class="nav-item">
                            <i class="eye"></i>
                            <p>12452</p>
                        </li>
                    </ul>
                </div>
            </a>
            <a class="cats sport" href="#">Спорт</a>
        </div>
        <div class="news-continuous">
            <div class="news-continuous-img">
                <img src="img/content/intro-bg2.png">
            </div>
            <a href="#">
                <div class="news-continuous-caption">
                    <div class="news-continuous-author">
                        <img src="img/content/news-continuous-author1.png">
                        <p>Kymbat Slyambekov</p>
                    </div>
                    <h2>Мүмкіндігі шектеулі жандар салықтан босатылған</h2>
                    <ul class="nav news-item-meta">
                        <li class="nav-item">
                            <p>Кеше</p>
                        </li>
                        <li class="nav-item">
                            <span>|</span>
                        </li>
                        <li class="nav-item">
                            <i class="cloud"></i>
                            <p>0</p>
                        </li>
                        <li class="nav-item">
                            <i class="eye"></i>
                            <p>12452</p>
                        </li>
                    </ul>
                </div>
            </a>
            <a class="cats society" href="#">Білім</a>
        </div>
        <div class="news-item">
            <div class="news-item-img">
                <a href="#">
                    <img src="img/content/intro-bg1.png">
                </a>
            </div>
            <a href="#">
                <div class="news-item-caption">
                    <h2>Шымкент әкімі жас ғалым ойлап тапқан залалсыздандыру технологиясымен таны...</h2>
                    <ul class="nav news-item-meta">
                        <li class="nav-item">
                            <p>Кеше</p>
                        </li>
                        <li class="nav-item">
                            <span>|</span>
                        </li>
                        <li class="nav-item">
                            <i class="cloud"></i>
                            <p>0</p>
                        </li>
                        <li class="nav-item">
                            <i class="eye"></i>
                            <p>12452</p>
                        </li>
                    </ul>
                </div>
            </a>
            <a class="cats sport" href="#">Спорт</a>
        </div>
        <div class="news-continuous d-lg-none d-xl-block">
            <div class="news-continuous-img">
                <img src="img/content/intro-bg2.png">
            </div>
            <a href="#">
                <div class="news-continuous-caption">
                    <div class="news-continuous-author">
                        <img src="img/content/news-continuous-author1.png">
                        <p>Kymbat Slyambekov</p>
                    </div>
                    <h2>Мүмкіндігі шектеулі жандар салықтан босатылған</h2>
                    <ul class="nav news-item-meta">
                        <li class="nav-item">
                            <p>Кеше</p>
                        </li>
                        <li class="nav-item">
                            <span>|</span>
                        </li>
                        <li class="nav-item">
                            <i class="cloud"></i>
                            <p>0</p>
                        </li>
                        <li class="nav-item">
                            <i class="eye"></i>
                            <p>12452</p>
                        </li>
                    </ul>
                </div>
            </a>
            <a class="cats society" href="#">Білім</a>
        </div>
    </div>
</div>
</section>-->

<section id="view">
<div class="container">
    <div class="view-title">
        <h1 class="section-title">Көзқарас</h1>
    </div>
</div>
<div class="container-fluid">
    <div class="container">
        <div class="view-slide-wrapper">
            <div class="view-slide">
                <div class="view-slide-img">
                    <img style="z-index: 99" src=" {{ asset('img/content/intro-bg2.png')}}">
                </div>
                <a href="#">
                    <div class="view-slide-caption">
                        <div class="view-slide-caption-top">
                            <!--<p>Виктор Цой</p>-->
                            <h3>Мүмкіндігі шектеулі жандар салықтан босатылған</h3>
                        </div>
                        <div class="view-slide-caption-bottom">
                            <div class="news-continuous-author">
                                <img src="{{ asset('img/content/news-continuous-author1.png')}}">
                                <p>Kymbat Slyambekov</p>
                            </div>
                            <span>|</span>
                            <ul class="nav news-item-meta">
                                <li class="nav-item">
                                    <p>Кеше</p>
                                </li>
                                <li class="nav-item">
                                    <span>|</span>
                                </li>
                                <li class="nav-item">
                                    <i class="cloud"></i>
                                    <p>0</p>
                                </li>
                                <li class="nav-item">
                                    <i class="eye"></i>
                                    <p>12452</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </a>
                <a class="cats weekend" href="#">WEEKEND</a>
            </div>
            <div class="news-continuous">
                <div class="news-continuous-img">
                    <img src=" {{ asset('img/content/intro-bg2.png')}}">
                </div>
                <a href="#">
                    <div class="news-continuous-caption">
                        <div class="news-continuous-author">
                            <img src=" {{ asset('img/content/news-continuous-author1.png')}}">
                            <p>Kymbat Slyambekov</p>
                        </div>
                        <h2>Мүмкіндігі шектеулі жандар салықтан босатылған</h2>
                        <ul class="nav news-item-meta">
                            <li class="nav-item">
                                <p>Кеше</p>
                            </li>
                            <li class="nav-item">
                                <span>|</span>
                            </li>
                            <li class="nav-item">
                                <i class="cloud"></i>
                                <p>0</p>
                            </li>
                            <li class="nav-item">
                                <i class="eye"></i>
                                <p>12452</p>
                            </li>
                        </ul>
                    </div>
                </a>
                <a class="cats society" href="#">Білім</a>
            </div>
            <div class="news-continuous">
                <div class="news-continuous-img">
                    <img src=" {{ asset('img/content/intro-bg2.png')}}">
                </div>
                <a href="#">
                    <div class="news-continuous-caption">
                        <div class="news-continuous-author">
                            <img src="{{ asset('img/content/news-continuous-author1.png') }}">
                            <p>Kymbat Slyambekov</p>
                        </div>
                        <h2>Мүмкіндігі шектеулі жандар салықтан босатылған</h2>
                        <ul class="nav news-item-meta">
                            <li class="nav-item">
                                <p>Кеше</p>
                            </li>
                            <li class="nav-item">
                                <span>|</span>
                            </li>
                            <li class="nav-item">
                                <i class="cloud"></i>
                                <p>0</p>
                            </li>
                            <li class="nav-item">
                                <i class="eye"></i>
                                <p>12452</p>
                            </li>
                        </ul>
                    </div>
                </a>
                <a class="cats society" href="#">Білім</a>
            </div>
            <div class="news-continuous">
                <div class="news-continuous-img">
                    <img src=" {{ asset('img/content/intro-bg2.png')}}">
                </div>
                <a href="#">
                    <div class="news-continuous-caption">
                        <div class="news-continuous-author">
                            <img src=" {{ asset('img/content/news-continuous-author1.png')}}">
                            <p>Kymbat Slyambekov</p>
                        </div>
                        <h2>Мүмкіндігі шектеулі жандар салықтан босатылған</h2>
                        <ul class="nav news-item-meta">
                            <li class="nav-item">
                                <p>Кеше</p>
                            </li>
                            <li class="nav-item">
                                <span>|</span>
                            </li>
                            <li class="nav-item">
                                <i class="cloud"></i>
                                <p>0</p>
                            </li>
                            <li class="nav-item">
                                <i class="eye"></i>
                                <p>12452</p>
                            </li>
                        </ul>
                    </div>
                </a>
                <a class="cats society" href="#">Білім</a>
            </div>
            <div class="news-continuous">
                <div class="news-continuous-img">
                    <img src=" {{ asset('img/content/intro-bg2.png')}}">
                </div>
                <a href="#">
                    <div class="news-continuous-caption">
                        <div class="news-continuous-author">
                            <img src=" {{ asset('img/content/news-continuous-author1.png')}}">
                            <p>Kymbat Slyambekov</p>
                        </div>
                        <h2>Мүмкіндігі шектеулі жандар салықтан босатылған</h2>
                        <ul class="nav news-item-meta">
                            <li class="nav-item">
                                <p>Кеше</p>
                            </li>
                            <li class="nav-item">
                                <span>|</span>
                            </li>
                            <li class="nav-item">
                                <i class="cloud"></i>
                                <p>0</p>
                            </li>
                            <li class="nav-item">
                                <i class="eye"></i>
                                <p>12452</p>
                            </li>
                        </ul>
                    </div>
                </a>
                <a class="cats society" href="#">Білім</a>
            </div>
        </div>
    </div>
</div>
</section>

<section id="finance">
<div class="container">
    <div class="finance">
        <div class="finance-top">
            <img class="finance-logo" src=" {{ asset('img/finance-logo.svg')}}">
            <h1 class="section-title">Finance</h1>
            <a class="finance-link" href="#">
                finance.bugin.kz
                <img src=" {{ asset('img/icon/link.svg')}}">
            </a>
        </div>
        <div class="finance-body">
            <div class="finance-body-left">
                <div class="finance-item">
                    <a href="#">
                        <div class="finance-article">
                            <div class="finance-article-img">
                                <img src=" {{ asset('img/icon/plain.svg')}}">
                            </div>
                            <div class="finance-article-text">
                                <h3>Турлармен рейстерде қалай үнемдеуге болады, егер сіз аймақтарда тұрсаңыз</h3>
                                <ul class="nav news-item-meta">
                                    <li class="nav-item">
                                        <p>Кеше</p>
                                    </li>
                                    <li class="nav-item">
                                        <span>|</span>
                                    </li>
                                    <li class="nav-item">
                                        <i class="cloud"></i>
                                        <p>0</p>
                                    </li>
                                    <li class="nav-item">
                                        <i class="eye"></i>
                                        <p>12452</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="author-link">
                        <img src=" {{ asset('img/content/author-img.png')}}">
                        <p>Асхат Қасенғали</p>
                    </a>
                </div>
            </div>
            <div class="finance-aside">
                <div class="finance-aside-item">
                    <p>Мен миллион теңгеге несие жинадым және оларды уақытында қайтара алмадым</p>
                    <ul class="nav news-item-meta">
                        <li class="nav-item">
                            <p>Кеше</p>
                        </li>
                        <li class="nav-item">
                            <span>|</span>
                        </li>
                        <li class="nav-item">
                            <i class="cloud"></i>
                            <p>0</p>
                        </li>
                        <li class="nav-item">
                            <i class="eye"></i>
                            <p>12452</p>
                        </li>
                    </ul>
                </div>
                <div class="finance-aside-item">
                    <p>Лагундар, сарқырамалар және қараусыз сарайлар: Кипрдің 20 әдемі көрінісі</p>
                    <ul class="nav news-item-meta">
                        <li class="nav-item">
                            <p>Кеше</p>
                        </li>
                        <li class="nav-item">
                            <span>|</span>
                        </li>
                        <li class="nav-item">
                            <i class="cloud"></i>
                            <p>0</p>
                        </li>
                        <li class="nav-item">
                            <i class="eye"></i>
                            <p>12452</p>
                        </li>
                    </ul>
                </div>
                <div class="finance-aside-item">
                    <p>Obuv Kazakhstan: шығын алды, дивидендтерден бас тартты және қарызды ұлғайтты</p>
                    <ul class="nav news-item-meta">
                        <li class="nav-item">
                            <p>Кеше</p>
                        </li>
                        <li class="nav-item">
                            <span>|</span>
                        </li>
                        <li class="nav-item">
                            <i class="cloud"></i>
                            <p>0</p>
                        </li>
                        <li class="nav-item">
                            <i class="eye"></i>
                            <p>12452</p>
                        </li>
                    </ul>
                </div>
                <div class="finance-aside-item">
                    <p>Электриктер біздің санауыштарымызды көршілерімен шатастырды. Кім төлеуі керек?</p>
                    <ul class="nav news-item-meta">
                        <li class="nav-item">
                            <p>Кеше</p>
                        </li>
                        <li class="nav-item">
                            <span>|</span>
                        </li>
                        <li class="nav-item">
                            <i class="cloud"></i>
                            <p>0</p>
                        </li>
                        <li class="nav-item">
                            <i class="eye"></i>
                            <p>12452</p>
                        </li>
                    </ul>
                </div>
                <div class="finance-aside-item">
                    <p>Электриктер біздің санауыштарымызды көршілерімен шатастырды. Кім төлеуі керек?</p>
                    <ul class="nav news-item-meta">
                        <li class="nav-item">
                            <p>Кеше</p>
                        </li>
                        <li class="nav-item">
                            <span>|</span>
                        </li>
                        <li class="nav-item">
                            <i class="cloud"></i>
                            <p>0</p>
                        </li>
                        <li class="nav-item">
                            <i class="eye"></i>
                            <p>12452</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<section id="subscribe">
<div class="container">
    <div class="subscribe-wrapper">
        <ul class="subscribe-left">
            <li>
                <img src=" {{ asset('img/icon/left-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/left-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/left-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/left-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/left-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/left-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/left-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/left-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/left-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/left-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/left-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/left-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/left-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/left-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/left-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/left-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/left-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/left-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/left-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/left-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/left-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/left-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/left-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/left-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/left-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/left-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/left-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/left-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/left-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/left-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/left-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/left-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/left-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/left-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/left-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/left-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/left-wing.svg')}}">
            </li>
        </ul>
        <div class="subscribe">
            <div class="subscribe-img">
                <img src=" {{ asset('img/content/subscribe-img.svg')}}">
            </div>
            <div class="subscribe-text">
                <h1 class="section-title">Апталық шолу</h1>
                <p>Ең қызықты айдарларға жазыл,өзекті жаңалықтарды жіберіп алма.<br>Жалықтырмаймыз 😉</p>
                <div class="subscribe-checkbox-wrapper">
                    <div class="subscribe-checkbox">
                        <p>Саясат</p>
                        <div class="subscribe-check">
                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 0V10M0 5H10" stroke="#8D8F9B"/>
                            </svg>
                        </div>
                        <input type="checkbox">
                    </div>
                    <div class="subscribe-checkbox">
                        <p>Экономика</p>
                        <div class="subscribe-check">
                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 0V10M0 5H10" stroke="#8D8F9B"/>
                            </svg>
                        </div>
                        <input type="checkbox">
                    </div>
                    <div class="subscribe-checkbox">
                        <p>Weekend</p>
                        <div class="subscribe-check">
                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 0V10M0 5H10" stroke="#8D8F9B"/>
                            </svg>
                        </div>
                        <input type="checkbox">
                    </div>
                    <div class="subscribe-checkbox">
                        <p>Спорт</p>
                        <div class="subscribe-check">
                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 0V10M0 5H10" stroke="#8D8F9B"/>
                            </svg>
                        </div>
                        <input type="checkbox">
                    </div>
                    <div class="subscribe-checkbox">
                        <p>Қоғам</p>
                        <div class="subscribe-check">
                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 0V10M0 5H10" stroke="#8D8F9B"/>
                            </svg>
                        </div>
                        <input type="checkbox">
                    </div>
                    <div class="subscribe-checkbox">
                        <p>Әлем жаңалықтары</p>
                        <div class="subscribe-check">
                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 0V10M0 5H10" stroke="#8D8F9B"/>
                            </svg>
                        </div>
                        <input type="checkbox">
                    </div>
                    <div class="subscribe-checkbox">
                        <p>Құқық</p>
                        <div class="subscribe-check">
                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 0V10M0 5H10" stroke="#8D8F9B"/>
                            </svg>
                        </div>
                        <input type="checkbox">
                    </div>
                    <div class="subscribe-checkbox">
                        <p>Мұрағат</p>
                        <div class="subscribe-check">
                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 0V10M0 5H10" stroke="#8D8F9B"/>
                            </svg>
                        </div>
                        <input type="checkbox">
                    </div>
                </div>
                <div class="subscribe-sub">
                    <div class="subscribe-email">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="example@bugin.kz" name="email">
                    </div>
                    <a class="subscribe-btn" href="#">Жазылу</a>
                </div>
            </div>
        </div>
        <ul class="subscribe-right">
            <li>
                <img src=" {{ asset('img/icon/right-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/right-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/right-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/right-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/right-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/right-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/right-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/right-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/right-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/right-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/right-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/right-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/right-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/right-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/right-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/right-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/right-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/right-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/right-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/right-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/right-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/right-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/right-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/right-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/right-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/right-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/right-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/right-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/right-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/right-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/right-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/right-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/right-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/right-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/right-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/right-wing.svg')}}">
            </li>
            <li>
                <img src=" {{ asset('img/icon/right-wing.svg')}}">
            </li>
        </ul>
    </div>
</div>
@endsection