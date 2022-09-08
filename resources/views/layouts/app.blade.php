<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

@include('partials.header')

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static   menu-collapsed" data-open="click" data-menu="vertical-menu-modern" data-col="">

    @include('partials.navbar')


  @include('partials.sidebar')

   
   @yield('content')

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-md-start d-block d-md-inline-block mt-25">Copyright &copy; 2022<a class="ms-25" href="#" target="_blank">Himalayan Leisure, Inc.</a><span class="d-none d-sm-inline-block">, All rights Reserved</span></span><span class="float-md-end d-none d-md-block">Hand-crafted & Made with<i data-feather="heart"></i></span></p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->



@include('partials.library')
</body>
<!-- END: Body-->

</html>
