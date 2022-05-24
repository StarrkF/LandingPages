@extends('admin.auth.index')
@section('auth')
<div class="card card-authentication1 mx-auto my-5">
    <div class="card-body">
     <div class="card-content p-2">
         <div class="text-center">
             <img src="{{ asset('panel/assets/images/admin-logo.png') }}" class="img-fluid">
         </div>
      <div class="card-title text-uppercase text-center py-3">Login</div>
      <form action="{{route('post.login')}}" method="POST">
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
                <input type="email" class="form-control input-shadow" name="email" placeholder="Enter Your Email">
                <div class="form-control-position"><i class="icon-envelope"></i></div>
            </div>
        </div>
        
        <div class="form-group">
            <div class="position-relative has-icon-right">
                <input type="password"  class="form-control input-shadow" name="password" placeholder="Choose Password">
                <div class="form-control-position"><i class="icon-lock"></i></div>
            </div>
        </div>
        
        
       <button type="submit" class="btn btn-light btn-block waves-effect waves-light">Sign In</button>
        
      
       </form>
       </div>
      </div>
      <div class="card-footer text-center py-3">
        <p class="text-warning mb-0">Do not have an account? <a href="{{route('get.register')}}"> Sign Up here</a></p>
      </div>
     </div>
@endsection