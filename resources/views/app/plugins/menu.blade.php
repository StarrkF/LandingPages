@php
    $menus=App\Models\Menu::orderBy('number','asc')->get()
@endphp
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class="header__logo">
                    <a href="{{route('app.home')}}"><img src="{{ asset('app/img/logo-header.png') }}" alt=""></a>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="header__nav__option">
                    <nav class="header__nav__menu mobile-menu">
                        <ul>
                             @foreach ($menus as $menu)
                                 <li class="{{request()->is($menu->link) ? 'active' : ''}}"><a href="{{route('app.get.content',$menu->link)}}">{{$menu->name}}</a></li>
                             @endforeach
                            {{-- <li><a href="{{route('about')}}">Hakkımda</a></li>
                            <li><a href="{{route('projects')}}">Projeler</a></li>
                            <li><a href="{{route('blog')}}">Blog</a></li>
                            <li><a href="{{route('contact')}}">İletişim</a></li>  --}}
                        </ul>
                    </nav>
                    <div class="header__nav__social">
                        {{-- @if($contact->facebook)<a href="{{$contact->facebook}}"><i class="fa fa-facebook"></i></a>@endif
                        @if($contact->twitter)<a href="{{$contact->twitter}}"><i class="fa fa-twitter"></i></a>@endif
                        @if($contact->instagram)<a href="{{$contact->instagram}}"><i class="fa fa-instagram"></i></a>@endif
                        @if($contact->linkedin)<a href="{{$contact->linkedin}}"><i class="fa fa-linkedin"></i></a>@endif --}}
                    </div>
                </div>
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>
<!-- Header End -->