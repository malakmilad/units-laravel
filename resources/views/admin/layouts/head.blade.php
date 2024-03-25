<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
@foreach ($settings as $setting)
    @if ($setting->key === 'site_name')
        <title>{{ $setting->value }}</title>
        <meta content="" name="description">
        <meta content="" name="keywords">
        <!-- Favicons -->
    @elseif ($setting->key === 'logo')
        <link href="{{ asset('FeaturedMedia' . '/' . $setting->value) }}" rel="icon">
        <link href="{{ asset('FeaturedMedia' . '/' . $setting->value) }}" rel="apple-touch-icon">
    @endif
@endforeach


<!-- Google Fonts -->
<link href="https://fonts.gstatic.com" rel="preconnect">
<link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets/css/loader.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/file.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/datatables.min.css') }}">

@yield('css')
