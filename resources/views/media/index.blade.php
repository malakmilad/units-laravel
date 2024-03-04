@extends('layouts.dashborad.admin')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/media.css') }}">
@endsection
@section('page-title')
    Welcome
@endsection
@section('content')
    @if (Session::has('success'))
        <div class="alert alert-primary alert-dismissible fade show" role="alert" id="successAlert">
            <i class="bi bi-check-circle me-1"></i>
            {{ Session::get('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Media</h5>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                        type="button" role="tab" aria-controls="home" aria-selected="true">All Media</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button"
                        role="tab" aria-controls="profile" aria-selected="false">Add New Media</button>
                </li>
            </ul>
            <div class="tab-content pt-2" id="myTabContent">
                <div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="d-flex justify-content-center" id="pagination-links">
                        {{ $media->links() }}
                    </div>
                    <h5 class="card-title">All Media</h5>
                    <div class="row align-items-top">
                        @foreach ($media as $image)
                            <div class="col-lg-3">
                                <div class="card">
                                    <h5 class="card-title d-flex justify-content-center">{{ $image->id }}</h5>
                                    <img height="200" src="{{ asset('FeaturedMedia' . '/' . $image->featured_image) }}"
                                        class="card-img-top">
                                </div>
                                <div class="action d-flex justify-content-center">
                                    <a class="show-btn" data-toggle="modal" data-target="#showMediaModal"
                                        data-id="{{ Hashids::encode($image->id) }}" style="cursor: pointer"><i
                                            class="bi bi-eye-fill"></i></a>
                                    <a class="edit-btn" data-toggle="modal" data-target="#editMediaModal"
                                        data-id="{{ Hashids::encode($image->id) }}" style="cursor: pointer"><i
                                            class="bi bi-pen"></i></a>
                                    <a href="{{ route('media.destroy', Hashids::encode($image->id)) }}"><i
                                            class="bi bi-trash"></i></a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <br>
                    <h5 class="card-title">Add New Media</h5>
                    <form id="mediaForm" action="{{ route('media.store') }}" method="POST" enctype="multipart/form-data">
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
                                data-post-url="https://someplace.com/image/uploads/backgrounds/"
                                class="position-absolute invisible" type="file" multiple
                                accept="image/jpeg, image/png, image/svg+xml" name="featured_image[]" />
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
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Popup Show Media Details -->
    <div class="modal fade" id="showMediaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Media Details</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="showMediaModalBody">

                </div>
            </div>
        </div>
    </div>
    <!-- Modal Popup Edit Media Form -->
    <div class="modal fade" id="editMediaModal" tabindex="-1" aria-labelledby="editMediaModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Media</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="editMediaModalBody">
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{ asset('assets/js/media/add.js') }}"></script>
    <script src="{{ asset('assets/js/media/edit.js') }}"></script>
    <script src="{{ asset('assets/js/media/show.js') }}"></script>
@endsection
