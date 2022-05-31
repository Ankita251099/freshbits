<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body class="dashboard-page sb-r-c onload-check mobile-view sb-l-disable-animation tray-rescale">
    <!-- Start: Main -->
    <div id="main">
   @include('layouts.header')
       @include('layouts.menu')
        <!-- Start: Content-Wrapper -->
        <section id='content_wrapper'>

            @yield('content')

        </section>
        @include('layouts.footer')

    </div>
    <!-- End: Main -->
    <!-- jQuery -->

 @include('layouts.script')
    @yield('js')
</body>

</html>