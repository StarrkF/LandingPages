@extends('admin.auth.index')
@section('auth')
<div class="card card-authentication1 mx-auto my-5">
    <div class="card-body">
     <div class="card-content p-2">
         <div class="text-center">
             <img src="{{ asset('panel/assets/images/admin-logo.png') }}" class="img-fluid">
         </div>
      <div class="card-title text-uppercase text-center py-3">Register</div>
      <form action="{{route('post.register')}}" method="POST">
        @csrf
        @if ($errors->any())
        <div class="alert text-white p-2">
                @foreach ($errors->all() as $error)
                    <p><i class="icon-ban"></i> {{ $error }}</p>
                @endforeach
        </div>
        @endif
        <div class="form-group">
            <div class="position-relative has-icon-right">
                <input type="text"  class="form-control input-shadow" name="name" placeholder="Enter Your Name">
                <div class="form-control-position"><i class="icon-user"></i></div>
            </div>
        </div>

        <div class="form-group">
            <div class="position-relative has-icon-right">
                <input type="email"  class="form-control input-shadow" name="email" placeholder="Enter Your Email">
                <div class="form-control-position"><i class="icon-envelope"></i></div>
            </div>
        </div>
        
        <div class="form-group">
            <div class="position-relative has-icon-right">
                <input type="password"  class="form-control input-shadow" name="password" placeholder="Choose Password">
                <div class="form-control-position"><i class="icon-lock"></i></div>
            </div>
        </div>
        
        
       <button type="submit" class="btn btn-light btn-block waves-effect waves-light">Sign Up</button>
        
      
       </form>
       </div>
      </div>
     </div>
@endsection