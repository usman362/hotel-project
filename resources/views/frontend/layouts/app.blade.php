<!doctype html>
<html lang="en">

 @include('frontend.partials.head')

<body>

    @include('frontend.partials.header')
    
   @yield('content')
   
   @include('frontend.partials.footer')
</body>

</html>