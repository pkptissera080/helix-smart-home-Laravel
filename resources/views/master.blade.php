<!DOCTYPE html>
<html lang="en">

<!-- head -->
@include('includes.common.head')
<!-- End head -->

<body class="g-sidenav-show  bg-gray-200">

    <!-- sidebar -->
    @include('includes.common.sidebar')
    <!-- End sidebar -->

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        @include('includes.common.navbar')
        <!-- End Navbar -->

        <div class="container-fluid py-4">

            @yield('main-body-content')

            <!-- footer -->
            @include('includes.common.footer')
            <!-- End footer -->
        </div>

    </main>

    <!-- script-src -->
    @include('includes.common.script-src')
    <!-- End script-src -->
</body>

</html>