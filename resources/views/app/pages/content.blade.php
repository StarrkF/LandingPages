@extends('app.index')
@section('app.content')
@if ($menu->catid==1)
    @include('app.pages.single.index')
@else
   @include('app.pages.multi.index')
@endif
@endsection