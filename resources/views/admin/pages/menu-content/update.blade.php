@extends('admin.index')
@section('content')
<form action="{{route('admin.update.page',[$page->menu->link,$page->id])}}" method="POST" enctype="multipart/form-data">
    @csrf
<div class="card">
    <div class="card-body">
        <div class="card-title"> İçerik</div>
        <hr>
            <div class="row">
            
            <input type="hidden" name="menuid" value="{{$page->menu->id}}">
            <input type="hidden" name="catid" value="{{$page->catid}}">
            <div class="form-group col-12">
                <label for="title">Başlık</label>
                <input type="text" class="form-control" required id="title" name="title" value="{{$page->title}}">
            </div>
    

            <div class="form-group col-12 col-md-4">
                <label for="desc">Açıklama</label>
                <input type="text" class="form-control" id="desc" name="desc" value="{{$page->desc}}">
            </div>
    
            <div class="form-group col-12 col-md-4">
                <label for="key">Anahtar</label>
                <input type="text" class="form-control" id="key" name="key" value="{{$page->key}}">
            </div>

            <div class="form-group col-12 col-md-4">
                <label for="number">Sıra</label>
                <input type="number" class="form-control" required id="number" value="{{$page->number}}" required name="number">
            </div>

            <div class="form-group col-12 col-md-7">
                <label for="content">İçerik</label>
                <textarea name="content" id="content">{{$page->content}}</textarea>
            </div>
    
            <div class="form-group col-12 col-md-5">
                <label for="imageUpload">Resim</label>
                <div class="avatar-upload">
                    <div class="avatar-edit">
                        <input type='file' name="image" id="imageUpload" accept=".png, .jpg, .jpeg"/>
                        <label for="imageUpload"></label>
                    </div>
                    <div class="avatar-preview">
                        <div id="imagePreview" style="background-image: url({{ asset($page->image) }});"></div>
                    </div>
                </div>
            </div> 
        </div>
     </div>
     <div class="card-footer">
        <button type="submit" class="btn btn-lg btn-light float-right">Kaydet</button>
     </div>
</div>
</form>
@endsection