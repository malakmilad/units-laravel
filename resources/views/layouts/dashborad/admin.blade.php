<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.dashborad.head')
</head>

<body>
    <!-- Navbar -->
    @include('layouts.dashborad.navbar')
    <!-- Main Sidebar Container -->
    @include('layouts.dashborad.sidebar')
    <!-- main-->
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
    @include('layouts.dashborad.footer')
    @include('layouts.dashborad.script')
    @yield('scripts')
</body>

</html>
