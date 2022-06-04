  <!--Start sidebar-wrapper-->
  @php
    $menus = App\Models\Menu::orderBy('number','asc')->get();
  @endphp
  <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
    <div class="brand-logo">
     <a href="#">
       <img src="{{ asset('panel/assets/images/admin-logo.png') }}" class="img-width" alt="logo icon">
    </a>
  </div>
  <ul class="sidebar-menu do-nicescrol">
     <li class="sidebar-header">Menü Kontrolcüsü</li>
     <li>
       <a href="{{route('admin.get.menu')}}">
         <i class="zmdi zmdi-view-dashboard"></i> <span>Menüler</span>
       </a>
     </li>


     <li class="sidebar-header">{{count($menus->where('catid',1))>0 ? 'Tekli İçerik' : ''}}</li>
     @foreach ($menus->where('catid',1) as $menu)
     <li>
      <a href="{{route('admin.get.page',$menu->link)}}">
        <i class="zmdi zmdi-view-dashboard"></i> <span>{{$menu->name}}</span>
      </a>
    </li>
     @endforeach

     <li class="sidebar-header">{{count($menus->where('catid',2))>0 ? 'Çoklu İçerik' : ''}}</li>
     @foreach ($menus->where('catid',2) as $menu)
     <li>
      <a href="{{route('admin.get.page',$menu->link)}}">
        <i class="zmdi zmdi-view-dashboard"></i> <span>{{$menu->name}}</span>
      </a>
    </li>
     @endforeach

     

   </ul>
  
  </div>
  <!--End sidebar-wrapper-->