@extends('admin.index')
@section('content')

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-6">
                <div class="card-title">{{ucFirst($menu->name)}} Contets</div>
            </div>
            <div class="col-6 text-right">
                <button data-toggle="modal" data-target="#modalInsert" class="btn btn-light">Add Content</button>
            </div>
            @include('admin.pages.menu-content.insert')
        </div>
        
        <hr>
        <table class="table table-hover table-image">
           <thead>
             <tr>
               <th scope="col">Image</th>
               <th scope="col">Number</th>
               <th scope="col">Title</th>
               <th scope="col">Content</th>
               <th scope="col">Status</th>
               <th scope="col">Action</th>
             </tr>
           </thead>
           <tbody>
               @foreach ($pages as $page)
               <tr>
                   <td><img src="{{ asset($page->image) }}" class="img-thumbnail img-width"></td>
                   <td>{{$page->number}}</td>
                   <td>{{$page->title}}</td>
                   <td>{!!$page->content!!}</td>
                   <td>
                    <div class="custom-control custom-switch">
                      <input type="checkbox" class="custom-control-input" {{$page->status==1 ? 'checked' : ''}} id="customSwitches">
                      <label class="custom-control-label" for="customSwitches"></label>
                    </div> 
                   </td>
                   <td>
                       <a href="{{route('admin.delete.page',[$menu->link,$page->id])}}" class="btn btn-outline-danger"><i class="icon-trash font-weight-bold"></i></a>
                       <a href="{{route('admin.show.page',[$menu->link,$page->id])}}" class="btn btn-outline-success"><i class="icon-pencil font-weight-bold"></i></a>
                   </td>
                </tr>
               @endforeach
             
           </tbody>
         </table>
     </div>
</div>
@endsection