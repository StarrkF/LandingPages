<div class="breadcrumb-option spad set-bg" data-setbg="{{ asset('app/img/breadcrumb-bg.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>{{$menu->name}}</h2>
                    <div class="breadcrumb__links">
                        <a href="{{route('app.home')}}">Home</a>
                        <span>{{$menu->name}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- About Section Begin -->
<section class="about spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                @if(!$page)
                <div class="section-title my-5">
                    <h2>İçerik eklenmemiş</h2>
                </div>
                @else
                <div class="about__pic">

                    <div class="about__pic__item about__pic__item--large set-bg"
                    data-setbg="{{ asset($page->image ?? 'app/img/about/about-1.jpg') }}"></div>

               </div>
                @endif
            </div>
            @if ($page)
            <div class="col-lg-6">
                <div class="about__text">
                    <div class="section-title my-5">
                        <h2>{{$page->title}}</h2>
                    </div>
                    <div class="about__text__desc">
                        <p>{!!$page->content ?? '' !!}</p>
                    </div>
                </div>
            </div>
            @endif
            
        </div>
    </div>
</section>

