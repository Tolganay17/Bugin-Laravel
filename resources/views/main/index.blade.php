<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('img/favicon.svg')}}">
    <link rel="stylesheet" href="{{ asset('css/libs.min.css')}}">
    <link rel="stylesheet" href=" {{ asset('css/main.css')}}">
</head>
<body>
    <div class="preloader">
        <div class="preloader-inner"></div>
    </div>

   
        @include('layouts.body.header')
 

    @include('layouts.body.menu')
    <section id="top-news">
       @yield('home_content')
       @yield('category_content')

    </section>

    <div class="overlay"></div>

   @include('layouts.body.footer')

    <div class="dispute-notice d-none">
        <a class="dispute-icon" href="#">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.60543 15H8.00043C11.8662 15 15.0004 11.8657 15.0004 8C15.0004 4.13425 11.8662 1 8.00043 1C4.13468 1 1.00043 4.13425 1.00043 8C1.00043 9.64237 1.57006 11.1491 2.51681 12.3426M4.73143 15H1.80981C1.08968 15 0.729183 14.1294 1.23843 13.621L2.19218 12.6672M2.51418 12.34L2.19043 12.6637" stroke="#fff" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </a>
        <div class="notice-number">2</div>
    </div>

    <div class="videohelp videohelp-1">
        <div class="videohelp-img">
            <img src=" {{ asset('img/content/videohelp-man1.png')}}">
            <button class="video-close">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.66667 13.3332L13.3333 2.6665M2.66667 2.6665L13.3333 13.3332" stroke="#fff"/>
                </svg>
            </button>
        </div>
        <button class="videoplay-btn">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M19.2 11.9999L4.8 2.3999V21.5999L19.2 11.9999Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <p>Видеоинструкция</p>
        </button>
        <div class="videohelp-caption">
            <p>Как стать автором и начать зарабатывать сегодня</p>
            <svg width="51" height="46" viewBox="0 0 51 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.1" fill-rule="evenodd" clip-rule="evenodd" d="M40.7081 15.1764L36.7374 12.8839L37.005 12.3618C37.8987 10.3744 39.1561 9.54423 41.5054 9.54743C43.8166 9.52865 44.5755 9.2395 45.2054 8.14851L45.2201 8.12314C45.8133 7.09558 45.3662 5.90713 44.1864 5.22598C42.9686 4.52286 41.6406 4.88941 40.9653 5.97112L40.914 6.05992L36.7911 3.67955L36.8497 3.57806C38.7388 0.42319 42.4109 -0.399883 46.4704 1.94387C50.3142 4.16311 51.6742 7.63769 49.9164 10.6823L49.9017 10.7077C48.825 12.5725 47.2026 13.3611 44.7153 13.3627C42.3987 13.3615 41.5724 13.6794 40.9205 14.8085L40.7081 15.1764ZM38.9324 19.3946C38.1926 20.6759 36.5357 21.0556 35.2164 20.2938C33.8843 19.5248 33.3973 17.9074 34.1371 16.6261C34.8695 15.3575 36.5137 14.9705 37.8458 15.7396C39.1651 16.5013 39.6648 18.1261 38.9324 19.3946ZM19.0161 35.1079L14.6934 39.4306L14.1133 38.9058C11.8622 37.069 11.2269 35.1631 12.0417 32.1386C12.8151 29.1555 12.7046 28.0783 11.5169 26.8905L11.4893 26.8629C10.3706 25.7442 8.68571 25.91 7.40132 27.1944C6.07549 28.5202 6.0893 30.357 7.2494 31.6L7.34608 31.6967L2.8576 36.1851L2.74712 36.0746C-0.664119 32.5529 -0.456959 27.5396 3.96246 23.1202C8.14709 18.9356 13.0913 18.3832 16.4059 21.6977L16.4335 21.7253C18.4637 23.7555 18.9194 26.1171 18.0632 29.3212C17.2621 32.3043 17.3864 33.4782 18.6156 34.7074L19.0161 35.1079ZM23.836 38.8506C25.2309 40.2455 25.148 42.5104 23.7117 43.9467C22.2616 45.3968 20.0105 45.4659 18.6156 44.071C17.2345 42.69 17.3036 40.4388 18.7537 38.9887C20.19 37.5524 22.455 37.4695 23.836 38.8506Z" fill="black"/>
            </svg>
        </div>
    </div>

    <div class="videohelp videohelp-2">
        <div class="videohelp-img">
            <img src=" {{ asset('')}}img/content/videohelp-man2.png">
            <button class="video-close">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.66667 13.3332L13.3333 2.6665M2.66667 2.6665L13.3333 13.3332" stroke="#fff"/>
                </svg>
            </button>
        </div>
        <button class="videoplay-btn">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M19.2 11.9999L4.8 2.3999V21.5999L19.2 11.9999Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <p>Видеоинструкция</p>
        </button>
        <div class="videohelp-caption">
            <p>Как стать автором и начать зарабатывать сегодня</p>
            <svg width="51" height="46" viewBox="0 0 51 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.1" fill-rule="evenodd" clip-rule="evenodd" d="M40.7081 15.1764L36.7374 12.8839L37.005 12.3618C37.8987 10.3744 39.1561 9.54423 41.5054 9.54743C43.8166 9.52865 44.5755 9.2395 45.2054 8.14851L45.2201 8.12314C45.8133 7.09558 45.3662 5.90713 44.1864 5.22598C42.9686 4.52286 41.6406 4.88941 40.9653 5.97112L40.914 6.05992L36.7911 3.67955L36.8497 3.57806C38.7388 0.42319 42.4109 -0.399883 46.4704 1.94387C50.3142 4.16311 51.6742 7.63769 49.9164 10.6823L49.9017 10.7077C48.825 12.5725 47.2026 13.3611 44.7153 13.3627C42.3987 13.3615 41.5724 13.6794 40.9205 14.8085L40.7081 15.1764ZM38.9324 19.3946C38.1926 20.6759 36.5357 21.0556 35.2164 20.2938C33.8843 19.5248 33.3973 17.9074 34.1371 16.6261C34.8695 15.3575 36.5137 14.9705 37.8458 15.7396C39.1651 16.5013 39.6648 18.1261 38.9324 19.3946ZM19.0161 35.1079L14.6934 39.4306L14.1133 38.9058C11.8622 37.069 11.2269 35.1631 12.0417 32.1386C12.8151 29.1555 12.7046 28.0783 11.5169 26.8905L11.4893 26.8629C10.3706 25.7442 8.68571 25.91 7.40132 27.1944C6.07549 28.5202 6.0893 30.357 7.2494 31.6L7.34608 31.6967L2.8576 36.1851L2.74712 36.0746C-0.664119 32.5529 -0.456959 27.5396 3.96246 23.1202C8.14709 18.9356 13.0913 18.3832 16.4059 21.6977L16.4335 21.7253C18.4637 23.7555 18.9194 26.1171 18.0632 29.3212C17.2621 32.3043 17.3864 33.4782 18.6156 34.7074L19.0161 35.1079ZM23.836 38.8506C25.2309 40.2455 25.148 42.5104 23.7117 43.9467C22.2616 45.3968 20.0105 45.4659 18.6156 44.071C17.2345 42.69 17.3036 40.4388 18.7537 38.9887C20.19 37.5524 22.455 37.4695 23.836 38.8506Z" fill="black"/>
            </svg>
        </div>
    </div>

    <div class="videohelp videohelp-3">
        <div class="videohelp-img">
            <img src=" {{ asset('img/content/videohelp-man3.png')}}">
            <button class="video-close">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.66667 13.3332L13.3333 2.6665M2.66667 2.6665L13.3333 13.3332" stroke="#fff"/>
                </svg>
            </button>
        </div>
        <button class="videoplay-btn">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M19.2 11.9999L4.8 2.3999V21.5999L19.2 11.9999Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <p>Видеоинструкция</p>
        </button>
        <div class="videohelp-caption">
            <p>Как стать автором и начать зарабатывать сегодня</p>
            <svg width="51" height="46" viewBox="0 0 51 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.1" fill-rule="evenodd" clip-rule="evenodd" d="M40.7081 15.1764L36.7374 12.8839L37.005 12.3618C37.8987 10.3744 39.1561 9.54423 41.5054 9.54743C43.8166 9.52865 44.5755 9.2395 45.2054 8.14851L45.2201 8.12314C45.8133 7.09558 45.3662 5.90713 44.1864 5.22598C42.9686 4.52286 41.6406 4.88941 40.9653 5.97112L40.914 6.05992L36.7911 3.67955L36.8497 3.57806C38.7388 0.42319 42.4109 -0.399883 46.4704 1.94387C50.3142 4.16311 51.6742 7.63769 49.9164 10.6823L49.9017 10.7077C48.825 12.5725 47.2026 13.3611 44.7153 13.3627C42.3987 13.3615 41.5724 13.6794 40.9205 14.8085L40.7081 15.1764ZM38.9324 19.3946C38.1926 20.6759 36.5357 21.0556 35.2164 20.2938C33.8843 19.5248 33.3973 17.9074 34.1371 16.6261C34.8695 15.3575 36.5137 14.9705 37.8458 15.7396C39.1651 16.5013 39.6648 18.1261 38.9324 19.3946ZM19.0161 35.1079L14.6934 39.4306L14.1133 38.9058C11.8622 37.069 11.2269 35.1631 12.0417 32.1386C12.8151 29.1555 12.7046 28.0783 11.5169 26.8905L11.4893 26.8629C10.3706 25.7442 8.68571 25.91 7.40132 27.1944C6.07549 28.5202 6.0893 30.357 7.2494 31.6L7.34608 31.6967L2.8576 36.1851L2.74712 36.0746C-0.664119 32.5529 -0.456959 27.5396 3.96246 23.1202C8.14709 18.9356 13.0913 18.3832 16.4059 21.6977L16.4335 21.7253C18.4637 23.7555 18.9194 26.1171 18.0632 29.3212C17.2621 32.3043 17.3864 33.4782 18.6156 34.7074L19.0161 35.1079ZM23.836 38.8506C25.2309 40.2455 25.148 42.5104 23.7117 43.9467C22.2616 45.3968 20.0105 45.4659 18.6156 44.071C17.2345 42.69 17.3036 40.4388 18.7537 38.9887C20.19 37.5524 22.455 37.4695 23.836 38.8506Z" fill="black"/>
            </svg>
        </div>
    </div>

    <div class="modal" id="videohelp_modal">
        <div class="modal-content">
            <button class="videohelp-modal-close">
                <svg width="24" height="24" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 11L11 1M1 1L11 11" stroke="white"/>
                </svg>
            </button>
            <iframe id="video_iframe" width="100%" height="100%" src="https://www.youtube.com/embed/rrpGvVBqlUA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>

    <script src=" {{ asset('js/libs.min.js')}}"></script>
    <script src=" {{ asset('js/script.js')}}"></script>

    <script>
        //Бегущая строка
        $('.ticker').slick({
            dots: false,
            infinite: true,
            speed: 600,
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1000,
            variableWidth: true,
            arrows: false,
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

        //show collapse-menu
        $('.call-menu').click(function (){
            $(this).toggleClass('active');
            if($(this).hasClass('active')) {
                $('.collapse-menu').addClass('show');
                $('body').addClass('scroll-locked');
            } else {
                $('.collapse-menu').removeClass('show');
                $('body').removeClass('scroll-locked');
            }
        });

        $(document).mouseup(function (e){
            var div = $("#header, .collapse-menu");  //класс элемента вне которого клик
            if (!div.is(e.target) && div.has(e.target).length === 0 && $('.collapse-menu').hasClass('show')) {
                $('.call-menu').click();
            }
        });

        //show more menu
        $('.show-more').click(function (){
            $(this).closest('.menu-list').find('.hidden-menu').slideToggle(400);
            $(this).toggleClass('open');
            if($(this).hasClass('open')){
                $(this).html('Скрыть');
            } else  {
                $(this).html('Показать все');
            }
        })

        //change registration user
        $('.change-user-btn').click(function (){
            $('.change-user-btn').removeClass('active');
            $(this).addClass('active');
        })

        //logout
        $('.profile').mouseenter(function (){
            $('.logout').css('transform', 'translateX(0)')
        })

        $('.logout').mouseenter(function (){
            $(this).css('transform', 'translateX(0)')
        })

        $('.profile').mouseleave(function (){
            $('.logout').css('transform', 'translateX(-44px)')
        })

        $('.logout').mouseleave(function (){
            $('.logout').css('transform', 'translateX(-44px)')
        })
    </script>

    <script>
        //preloader animation
        var loader = document.getElementsByClassName("preloader-inner");
        function loadBMAnimation(loader) {
            var animation = bodymovin.loadAnimation({
                container: loader,
                renderer: "svg",
                loop: true,
                autoplay: true,
                path: " {{ asset('')}}img/preloader.json"
            });
        }
        for (var i = 0; i < loader.length; i++) {
            loadBMAnimation(loader[i]);
        }
        $(window).on('load', function () {
            $('body').addClass('loaded_hiding');
            window.setTimeout(function () {
                $('body').addClass('loaded');
                $('body').removeClass('loaded_hiding');
            }, 500);
        })
    </script>
    <script>
        $('.news-slider-wrapper').slick({
            dots: false,
            infinite: true,
            speed: 600,
            slidesToShow: 1,
            slidesToScroll: 1,
            prevArrow: $('.news-slider-prev'),
            nextArrow: $('.news-slider-next'),
            autoplay: true,
            autoplaySpeed: 4000,
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
        $('.tv-news-slider').slick({
            dots: false,
            infinite: true,
            speed: 300,
            slidesToShow: 2,
            slidesToScroll: 1,
            centerMode:true,
            prevArrow: $('.tv-news-prev'),
            nextArrow: $('.tv-news-next'),
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: false,
                        centerMode: true,
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
            ]
        });
    </script>
    <script>
        $('.subscribe-checkbox').click(function (){
            $(this).toggleClass('subscribe-checked');
        });
    </script>
    <script>
        $('.view-slide-wrapper').slick({
            dots: false,
            infinite: true,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 1,
            variableWidth: true,
            arrows: false,
            accessibility: true,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: false
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
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
        $('.profile').click(function (){
            $('.login').addClass('show');
            $('.overlay').addClass('overlay-show');
            $('body').addClass('scroll-locked')
        })


        //Здесь были изменения
        $(document).mouseup(function (e){
            var div = $(".login");  //класс элемента вне которого клик
            if (!div.is(e.target) && div.has(e.target).length === 0 && div.hasClass('show')) {
                div.removeClass('show');
                $('.overlay').removeClass('overlay-show');
                $('body').removeClass('scroll-locked');
            }
        });

        $('.registration-switch').click(function (){
            $('.login').removeClass('show');
            $('.registration').addClass('show');
            $('body').addClass('scroll-locked')
        })


        //Здесь были изменения
        $(document).mouseup(function (e){
            var div = $(".registration");  //класс элемента вне которого клик
            if (!div.is(e.target) && div.has(e.target).length === 0 && div.hasClass('show')) {
                div.removeClass('show');
                $('.overlay').removeClass('overlay-show');
                $('body').removeClass('scroll-locked')
            }
        });

        $('.back-btn').click(function (){
            $('.registration').removeClass('show');
            $('.login').addClass('show');
            $('.overlay').addClass('overlay-show');
            $('body').addClass('scroll-locked')
        })

        $('.authorize-close').click(function (){
            $('.login').removeClass('show');
            $('.registration').removeClass('show');
            $('.overlay').removeClass('overlay-show');
            $('body').removeClass('scroll-locked')
        })
    </script>
    <!--Кружащийся бордер фото автора-->
    <!--<script>
        $('.unvisited').click(function (){
            $(this).addClass('spinning');
        })
    </script>-->
    <script>
        $('.authorize-form').find('input').focus(function (){
            $(this).closest('.authorize-form').addClass('authorize-form-focus')
        });
        $('.authorize-form').find('input').blur(function (){
            if ($(this).val()=="") {
                $(this).closest('.authorize-form').removeClass('authorize-form-focus')
            }
        });
    </script>
    <script>
        $('.news-item-uncover').click(function (){
            $(this).addClass('uncover-animate')
        })
    </script>
    <script>
        $(document).ready(function (){
            setTimeout(function (){
                $('.videohelp').addClass('open');
            }, 1000)
            $('.video-close').click(function (){
                $('.videohelp').removeClass('open');
            })
            $('.videoplay-btn').click(function (){
                $('#videohelp_modal').modal('show');
            })
            $('.videohelp-modal-close').click(function (){
                $('#videohelp_modal').modal('hide');
            })

            var videoSrc = $('#videohelp_modal iframe').attr("src");

            $('#videohelp_modal').on('show.bs.modal', function () {
                $("#videohelp_modal iframe").attr("src", videoSrc+"?autoplay=1");
            });

            $("#videohelp_modal").on('hidden.bs.modal', function (e) {
                $("#videohelp_modal iframe").attr("src", null);
            });
           
        })
    </script>
   
</body>
</html>