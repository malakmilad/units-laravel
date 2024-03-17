{{-- @extends('admin.layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/file.css') }}">
@endsection
@section('page-title')
    Welcome
@endsection
@section('content') --}}
    <div class="card">
        <div class="relative sm:justify-center sm:items-center min-h-screen" style="padding:20px">
            <div style="margin-top:50px">
                <div id="btn" class="btn btn-primary" style="opacity:0.2;cursor:default">Select image</div>
                <div id="loading" style="font-size:12px">Loading file manager...</div>
                <h2 class="h5 mt-5">Selected image</h2>
                <div id="images">
                    No image selected yet.
                </div>
            </div>
        </div>
    </div>
{{-- @endsection --}}
{{-- @section('script')
    <script type="module" src="{{asset('assets/js/file.js')}}"></script>
@endsection --}}
