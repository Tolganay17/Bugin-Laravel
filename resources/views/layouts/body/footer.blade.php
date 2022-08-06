<footer id="footer">
    <div class="container">
        <div class="footer">
            <div class="footer-top">
                <ul class="nav footer-nav">
                    @foreach($categories as $cat)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('category')}}/{{$cat->slug}} " class="text-uppercase">{{$cat->title}}</a>
                    </li>
                    
                    @endforeach
                    
            </ul>
            <div class="mobile-app">
                <p>@lang('main.app')</p>
                <img src=" {{ asset('img/icon/cursor-right.svg')}}">
                <a class="app-icon apple" href="#">
                    <img src=" {{ asset('img/icon/apple.svg')}}">
                </a>
                <a class="app-icon" href="#">
                    <img src=" {{ asset('img/icon/android.svg')}}">
                </a>
            </div>
        </div>
    </div>
</section>