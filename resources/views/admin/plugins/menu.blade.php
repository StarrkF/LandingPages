  <!--Start sidebar-wrapper-->
  @php
    $menus = App\Models\Menu::orderBy('number','asc')->get();
  @endphp
  <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
    <div class="brand-logo">
     <a href="#">
      <img src="{{ asset('panel/assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
      <h5 class="logo-text">Dashtreme Admin</h5>
    </a>
  </div>
  <ul class="sidebar-menu do-nicescrol">
     <li class="sidebar-header">Menu Contol</li>
     <li>
       <a href="{{route('admin.get.menu')}}">
         <i class="zmdi zmdi-view-dashboard"></i> <span>Menus</span>
       </a>
     </li>

     <li class="sidebar-header">Pages</li>

     @foreach ($menus as $menu)
     <li>
      <a href="#">
        <i class="zmdi zmdi-view-dashboard"></i> <span>{{$menu->name}}</span>
      </a>
    </li>
     @endforeach

     

   </ul>
  
  </div>
  <!--End sidebar-wrapper-->