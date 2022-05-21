@extends('admin.index')
@section('content')
<div class="row mt-3">

    <div class="col-md-4 col-12">
       <div class="card">
            <div class="card-body">
                <div class="card-title">Add Menu</div>
                <hr>
                <form action="{{route('admin.store.menu')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" required id="name" name="name" placeholder="Enter Menu Name">
                    </div>

                    <div class="form-group">
                         <label for="number">Number</label>
                         <input type="number" class="form-control" required id="number" name="number" placeholder="Enter Menu Number">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-light mt-3 px-4"><i class="icon-plus"></i> Add</button>
                    </div>
                </form>
             </div>
       </div>
    </div>

    <div class="col-md-8 col-12">
        <div class="card">
             <div class="card-body">
                 <div class="card-title">Menus</div>
                 <hr>
                 <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">Number</th>
                        <th scope="col">Name</th>
                        <th scope="col">Link</th>
                        <th scope="col">Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($menus as $menu)
                        <tr>
                            <td>
                                <a href="" data-toggle="modal" data-target="#menuNumber{{$menu->id}}" >
                                    <small><i class="mr-2 icon-pencil"></i></small> 
                                    {{$menu->number}}
                                </a>
                            </td>
                            <td>
                                <a href="" data-toggle="modal" data-target="#menuName{{$menu->id}}">
                                    <small><i class="mr-2 icon-pencil"></i></small> 
                                    {{$menu->name}} 
                                </a>
                            </td>
                            <td>{{$menu->link}}</td>
                            
                            <td>
                                <a href="{{route('admin.delete.menu',$menu->link)}}" class="btn btn-outline-danger"><i class="icon-trash font-weight-bold"></i></a>
                                
                            </td>
                          </tr>
                          @include('admin.pages.modals.update-menu-name')
                          @include('admin.pages.modals.update-menu-number')
                        @endforeach
                      
                    </tbody>
                  </table>
              </div>
        </div>
     </div>


</div>
@endsection