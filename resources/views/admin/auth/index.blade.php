
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Dashtreme Admin - Free Dashboard for Bootstrap 4 by Codervent</title>
  <!-- loader-->
  <link href="{{ asset('panel/assets/css/pace.min.css') }}" rel="stylesheet"/>
  <script src="{{ asset('panel/assets/js/pace.min.js') }}"></script>
  <!--favicon-->
  <link rel="icon" href="{{ asset('panel/assets/images/favicon.ico') }}" type="image/x-icon">
   <!-- Bootstrap core CSS-->
   <link href="{{ asset('panel/assets/css/bootstrap.min.css') }}" rel="stylesheet"/>
   <!-- animate CSS-->
   <link href="{{ asset('panel/assets/css/animate.css') }}" rel="stylesheet" type="text/css"/>
   <!-- Icons CSS-->
   <link href="{{ asset('panel/assets/css/icons.css') }}" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="{{ asset('panel/assets/css/app-style.css') }}" rel="stylesheet"/>
  
</head>

<body class="bg-theme bg-theme2">

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">

 <div class="loader-wrapper"><div class="lds-ring"><div></div><div></div><div></div><div></div></div></div>
	
    @yield('auth')   

     <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	
	
	</div><!--wrapper-->
	
  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('panel/assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('panel/assets/js/popper.min.js') }}"></script>
  <script src="{{ asset('panel/assets/js/bootstrap.min.js') }}"></script>
	
  <!-- sidebar-menu js -->
  <script src="{{ asset('panel/assets/js/sidebar-menu.js') }}"></script>
  
  <!-- Custom scripts -->
  <script src="{{ asset('panel/assets/js/app-script.js') }}"></script>
  
</body>
</html>
