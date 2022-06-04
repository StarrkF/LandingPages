@extends('app.index')
@section('app.content')
<div class="breadcrumb-option spad set-bg" data-setbg="{{ asset('app/img/breadcrumb-bg.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>{{$info->title}}</h2>
                    <div class="breadcrumb__links">
                        <a href="{{route('app.home')}}">Anasayfa</a>
                        <span>{{$info->menu->name}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

 <!-- Blog Details Section Begin -->
 <div class="blog-details spad">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
                <div class="blog__details__content">
                    <img src="{{ asset($info->image) }}" class="blog-image rounded border border-dark" alt="">
                    <div class="blog__details__text">
                        {!!$info->content!!}
                    </div>
                    <div class="blog__details__tags">
                        <span><i class="fa fa-tag"></i> Tag:</span>
                        @foreach (explode(',',$info->key) as $key)
                            <a href="">{{$key}}</a>
                        @endforeach
                    </div>
            
                    <div class="blog__details__recent">
                        <h4>Son Paylaşımlar</h4>
                        <div class="row">
                            @foreach ($posts as $post)
                            <a href="{{route('app.get.content.detail',['link'=>$post->menu->link,'id'=>$post->id])}}">
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="blog__details__recent__item">
                                    <img src="{{ asset($post->image) }}" alt="">
                                    <h5>{{$post->title}}</h5>
                                    <span>{{$post->created_at->format('m-h d-m-y')}}</span>
                                </div>
                            </div>
                            </a>
                            @endforeach
                            
                            
                        </div>
                    </div>
                    <div class="blog__details__comment">
                        <h4>Yorum Yap</h4>
                        <form action="{{route('app.post.comment')}}" method="POST">
                            @csrf
                            <input type="hidden" name="menuid" value="{{$info->menuid}}">
                            <input type="hidden" name="contentid" value="{{$info->id}}">
                            <div class="input__list">
                                <input type="text" name="name" style="margin-right: 40px" placeholder="Name">
                                <input type="text" name="email" placeholder="Email">
                            </div>
                            <textarea name="comment" placeholder="Comment"></textarea>
                            <button type="submit" class="site-btn">Send Message</button>
                        </form>
                    </div>
                    <div class="blog__details__comment my-5">
                        <h4>Yorumlar</h4>
                        @foreach ($comments as $comment)
                        <div class="comment">
                            <div class="comment-title">{{$comment->name}} <span class="comment-date">({{$comment->email}})</span></div>
                            <div class="comment-content">{{$comment->comment}}</div>
                            <div class="comment-date">{{$comment->created_at}}</div>
                        </div>
                        @endforeach
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog Details Section End -->


@endsection