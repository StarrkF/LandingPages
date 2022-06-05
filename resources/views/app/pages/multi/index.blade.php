
<div class="breadcrumb-option spad set-bg" data-setbg="{{ asset('app/img/breadcrumb-bg.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    {{-- <h2>{{$page->first()->menu->name}}</h2> --}}
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
   
    <section class="blog spad">
        <div class="container">
            <div class="row">
                @if ($page->count()==0)
                <div class="section-title my-5 py-5"><h2>İçerik eklenmemiş</h2></div>  
                @endif
                @foreach ($page as $info)
                <div class="col-lg-4 col-md-6 col-sm-6 mx-auto">
                    <a href="{{route('app.get.content.detail',['link'=>$info->menu->link,'id'=>$info->id])}}">
                        <div class="blog__item">
                            <h4>{{$info->title}}</h4>
                            <ul>
                                <li>{{$info->created_at->format('m.h d/m/y')}}</li>
                            
                            </ul>
                            <p>{!! Str::length($info->content)>100 ? Str::substr(strip_tags($info->content), 0, 100).'...' : $info->content!!}</p>
                            
                        </div>
                    </a>
                    
                    
                </div>
                @endforeach
                
            </div>
        </div>
    </section>

