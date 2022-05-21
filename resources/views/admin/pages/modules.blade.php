@extends('admin.index')
@section('content')

<div class="row">
    <div class="col-12 col-md-4">
        <div class="card">
            <div class="card-header">
                <div class="card-title">@lang('content.add_module')</div>
            </div>
            <div class="card-body">
                <form action="{{route('admin.insert.modules')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="form-label">@lang('content.page_name')</label>
                        <input type="text" required class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="page_type" class="form-label">@lang('content.page_type')</label>
                        <select name="page_type" required id="" class="form-control">
                            @foreach ($types as $type)
                                <option value="{{$type->id}}">{{$type->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="order" class="form-label">@lang('content.page_number')</label>
                        <input type="number" required class="form-control" id="order" name="order">
                    </div>
                        <button type="submit" class="btn btn-light">@lang('content.add_button')</button>
                </form>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-8">
        <div class="card">
            <div class="card-header">
                <div class="card-title">@lang('content.modules')</div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th scope="col">@lang('content.page_number')</th>
                          <th scope="col">@lang('content.page_name')</th>
                          <th scope="col">@lang('content.page_type')</th>
                          <th scope="col">URL</th>
                          <th scope="col">@lang('content.action')</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($modules as $module)
                        <tr>
                            <td>{{$module->order}}</td>
                            <td>{{$module->name}}</td>
                            <td>{{$module->type->name}}</td>
                            <td><a href="{{url($module->url)}}">{{$module->url}}</a> </td>
                            <td>----</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
   




@endsection