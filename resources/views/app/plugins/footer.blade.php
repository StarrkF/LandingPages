@php
    $menus=App\Models\Menu::orderBy('number','asc')->get()
@endphp

<footer class="footer">
    <div class="container">
        <div class="footer__top">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="footer__top__logo">
                        <a href="#"><img src="{{ asset('app/img/logo.png') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="footer__top__social">
                        {{-- @if($contact->facebook)<a href="{{$contact->facebook}}"><i class="fa fa-facebook"></i></a>@endif
                        @if($contact->twitter)<a href="{{$contact->twitter}}"><i class="fa fa-twitter"></i></a>@endif
                        @if($contact->instagram)<a href="{{$contact->instagram}}"><i class="fa fa-instagram"></i></a>@endif
                        @if($contact->linkedin)<a href="{{$contact->linkedin}}"><i class="fa fa-linkedin"></i></a>@endif --}}
                    </div>
                </div>
            </div>
        </div>
       
        <div class="footer__copyright">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    <p class="footer__copyright__text">Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        All rights reserved | This template is made with <i class="fa fa-heart-o"
                            aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    </p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->