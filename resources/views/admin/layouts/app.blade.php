<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.layouts.head')
</head>

<body>
    <!-- ======= Header ======= -->
    @include('admin.layouts.navbar')<!-- End Header -->
    <!-- ======= Sidebar ======= -->
    @include('admin.layouts.sidebar')<!-- End Sidebar-->

    <main class="main" id="main">
        <div class="pagetitle">
            <h1>@yield('page-title')</h1>
        </div><!-- End Page Title -->
        <section class="section dashboard">
            <div class="row">
                @yield('content')
            </div>
        </section>
    </main>
    <!-- ======= Footer ======= -->
    @include('admin.layouts.footer')<!-- End Footer -->
    <!-- Vendor JS Files -->
    @include('admin.layouts.script')
    <!-- Template Main JS File -->
</body>

</html>
