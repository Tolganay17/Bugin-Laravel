@extends('main.index')
@section('category_content')
 <section id="top-news">
    <div class="container">
        <div class="top-news category-top-news">
            <div class="top-news-left category-news-slider">
                <div class="news-slider-wrapper">
                    @foreach ($posts as $p)
                    <div class="news-slider">
                        <div class="news-slider-img">
                            <img src="{{ asset('uploads/'.$p->image)}}">
                        </div>
                        <a href="#">
                            <div class="news-slider-caption">
                                <h2>{{$p->title}}</h2>
                                <span>2 сағат бұрын</span>
                            </div>
                        </a>
                        <a class="cats society" href="#">{{$p->category->title}}</a>
                    </div>
                    @endforeach
                </div>
                <ul class="nav news-slider-arrows">
                    <li class="nav-item">
                        <button class="news-slider-prev">
                            <img src="{{ asset('img/icon/cursor-left.svg')}}">
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="news-slider-next">
                            <img src="{{ asset('img/icon/cursor-right.svg')}}">
                        </button>
                    </li>
                </ul>
            </div>
            <div class="category-top-news-right">
                <div class="sm-news-wrapper category-sm-news">
                    @foreach($posts as $p)
                    <div class="sm-news-item">
                        <a href="#">
                            <div class="sm-news">
                                <div class="sm-news-img">
                                    <img src="{{ asset('uploads/'.$p->image)}}">
                                </div>
                                <div class="sm-news-caption">
                                    <h2>{{$p->title}}</h2>
                                    <span>2 сағат бұрын</span>
                                </div>
                            </div>
                        </a>
                        <a class="cats weekend" href="#">{{$p->category->title}}</a>
                    </div>
                    @endforeach
                </div>
                <div class="category-add">
                    <a href="#">
                        <img src="{{ asset('img/content/category-add.png')}}">
                    </a>
                </div>
            </div>
            <div class="category-left">
                <h1>Саясат</h1>
            </div>
        </div>
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
                            <img src="{{ asset('img/icon/lock.svg')}}">
                            Менің таңдауым (<span>Kipy</span>)
                        </a>
                        <a class="my-news-xs d-none" href="#">
                            <img src="{{ asset('img/icon/lock.svg')}}">
                            Менің таңдауым
                        </a>
                        <a class="news-setting" href="#">
                            <img src="{{ asset('img/icon/setting.svg')}}">
                        </a>
                    </div>
                    <div class="news-item-wrapper">
                        <div class="news-item">
                            <div class="news-item-img">
                                <a href="#">
                                    <img src="{{ asset('img/content/news-item1.png')}}">
                                </a>
                            </div>
                            <a href="#">
                                <div class="news-item-caption">
                                    <h2>Допинг дауы: МакГрегорды USADA офицерлері тексермек</h2>
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
                                <img src="{{ asset('img/content/news-continuous1.png')}}">
                            </div>
                            <a href="#">
                                <div class="news-continuous-caption">
                                    <div class="news-continuous-author">
                                        <img src="{{ asset('img/content/news-continuous-author1.png')}}">
                                        <p>Kymbat Slyambekov</p>
                                    </div>
                                    <h2>Есеп комитеті білім және ғылым министрлігін тексермек</h2>
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
                                    <img src="{{ asset('img/content/news-item1.png')}}">
                                </a>
                            </div>
                            <a href="#">
                                <div class="news-item-caption">
                                    <h2>Допинг дауы: МакГрегорды USADA офицерлері тексермек</h2>
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
                                <img src="{{ asset('img/content/news-continuous1.png')}}">
                            </div>
                            <a href="#">
                                <div class="news-continuous-caption">
                                    <div class="news-continuous-author">
                                        <img src="{{ asset('img/content/news-continuous-author1.png')}}">
                                        <p>Kymbat Slyambekov</p>
                                    </div>
                                    <h2>Есеп комитеті білім және ғылым министрлігін тексермек</h2>
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
                                    <img src="{{ asset('img/content/news-item1.png')}}">
                                </a>
                            </div>
                            <a href="#">
                                <div class="news-item-caption">
                                    <h2>Допинг дауы: МакГрегорды USADA офицерлері тексермек</h2>
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
                                <img src="{{ asset('img/content/news-continuous1.png')}}">
                            </div>
                            <a href="#">
                                <div class="news-continuous-caption">
                                    <div class="news-continuous-author">
                                        <img src="{{ asset('img/content/news-continuous-author1.png')}}">
                                        <p>Kymbat Slyambekov</p>
                                    </div>
                                    <h2>Есеп комитеті білім және ғылым министрлігін тексермек</h2>
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
                                    <img src="{{ asset('img/content/news-item1.png')}}">
                                </a>
                            </div>
                            <a href="#">
                                <div class="news-item-caption">
                                    <h2>Допинг дауы: МакГрегорды USADA офицерлері тексермек</h2>
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
                                <img src="{{ asset('img/content/news-continuous1.png')}}">
                            </div>
                            <a href="#">
                                <div class="news-continuous-caption">
                                    <div class="news-continuous-author">
                                        <img src="{{ asset('img/content/news-continuous-author1.png')}}">
                                        <p>Kymbat Slyambekov</p>
                                    </div>
                                    <h2>Есеп комитеті білім және ғылым министрлігін тексермек</h2>
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
                                    <img src="{{ asset('img/content/news-item1.png')}}">
                                </a>
                            </div>
                            <a href="#">
                                <div class="news-item-caption">
                                    <h2>Допинг дауы: МакГрегорды USADA офицерлері тексермек</h2>
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
                    </div>
                    <a class="news-item-uncover" href="#">
                        <img src="{{ asset('img/icon/uncover.svg')}}">
                        <span>Тағы қарау</span>
                    </a>
                </div>
                <div class="news-aside">
                    <div class="dispute">
                        <div class="dispute-header">
                            <img src="{{ asset('img/icon/cloud.svg')}}">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



   

    <div class="dispute-notice d-none">
        <a class="dispute-icon" href="#">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.60543 15H8.00043C11.8662 15 15.0004 11.8657 15.0004 8C15.0004 4.13425 11.8662 1 8.00043 1C4.13468 1 1.00043 4.13425 1.00043 8C1.00043 9.64237 1.57006 11.1491 2.51681 12.3426M4.73143 15H1.80981C1.08968 15 0.729183 14.1294 1.23843 13.621L2.19218 12.6672M2.51418 12.34L2.19043 12.6637" stroke="#fff" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </a>
        <div class="notice-number">2</div>
    </div>

    <div class="overlay"></div>

    <script src="js/libs.min.js"></script>
    <script src="js/script.js"></script>

    <script>
        $('.news-slider-wrapper').slick({
            dots: false,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            slidesToScroll: 1,
            prevArrow: $('.news-slider-prev'),
            nextArrow: $('.news-slider-next'),
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: false
                    }
                },
            ]
        });
    </script>
    <script>
        $('#live_checkbox').click(function (){
            $(this).closest('.switch-box').removeClass('active');
            if($(this).is(':checked')){
                $(this).closest('.switch-box').addClass('active');
            }
        });
    </script>

    <script>
        $('.news-item-uncover').click(function (){
            $(this).addClass('uncover-animate')
        })
    </script>
</body>
</html>
@endsection