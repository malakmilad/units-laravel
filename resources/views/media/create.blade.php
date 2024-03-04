@extends('layouts.dashborad.admin')
@section('css')
    <link rel="stylesheet" href="{{asset('assets/css/media.css')}}">
@endsection
@section('page-title')
    Welcome
@endsection
@section('content')
    <h5 class="card-title">Add New Media</h5>
    <form action="{{ route('media.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-bookmark"></i>
                    Save
                </button>
            </div>
        </div>
        @error('featured_image')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="bi bi-exclamation-octagon me-1"></i>
                {{ $message }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @enderror
        <fieldset class="upload_dropZone text-center mb-3 p-4">
            <legend class="visually-hidden">Image uploader</legend>
            <svg class="upload_svg" width="60" height="60" aria-hidden="true">
                <use href="#icon-imageUpload"></use>
            </svg>
            <p class="small my-2">Drag &amp; Drop image inside dashed region<br><i>or</i></p>
            <input id="upload_image_background" data-post-name="image_background"
                data-post-url="https://someplace.com/image/uploads/backgrounds/" class="position-absolute invisible"
                type="file" multiple accept="image/jpeg, image/png, image/svg+xml" name="featured_image[]" />
            <label class="btn btn-upload mb-3" for="upload_image_background">Choose file</label>
            <div class="upload_gallery d-flex flex-wrap justify-content-center gap-3 mb-0"></div>
        </fieldset>
    </form>
    <svg style="display:none">
        <defs>
            <symbol id="icon-imageUpload" clip-rule="evenodd" viewBox="0 0 96 96">
                <path
                    d="M47 6a21 21 0 0 0-12.3 3.8c-2.7 2.1-4.4 5-4.7 7.1-5.8 1.2-10.3 5.6-10.3 10.6 0 6 5.8 11 13 11h12.6V22.7l-7.1 6.8c-.4.3-.9.5-1.4.5-1 0-2-.8-2-1.7 0-.4.3-.9.6-1.2l10.3-8.8c.3-.4.8-.6 1.3-.6.6 0 1 .2 1.4.6l10.2 8.8c.4.3.6.8.6 1.2 0 1-.9 1.7-2 1.7-.5 0-1-.2-1.3-.5l-7.2-6.8v15.6h14.4c6.1 0 11.2-4.1 11.2-9.4 0-5-4-8.8-9.5-9.4C63.8 11.8 56 5.8 47 6Zm-1.7 42.7V38.4h3.4v10.3c0 .8-.7 1.5-1.7 1.5s-1.7-.7-1.7-1.5Z M27 49c-4 0-7 2-7 6v29c0 3 3 6 6 6h42c3 0 6-3 6-6V55c0-4-3-6-7-6H28Zm41 3c1 0 3 1 3 3v19l-13-6a2 2 0 0 0-2 0L44 79l-10-5a2 2 0 0 0-2 0l-9 7V55c0-2 2-3 4-3h41Z M40 62c0 2-2 4-5 4s-5-2-5-4 2-4 5-4 5 2 5 4Z" />
            </symbol>
        </defs>
    </svg>
@endsection
@section('script')
    <script src="{{asset('assets/js/media.js')}}"></script>
@endsection
