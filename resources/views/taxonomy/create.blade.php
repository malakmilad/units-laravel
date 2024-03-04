@extends('layouts.dashborad.admin')
@section('page-title')
    Welcome
@endsection
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/summernote.css') }}">
@endsection
@section('content')
    <h5 class="card-title">Add New Taxonmy</h5>
    <form action="{{ route('taxonomy.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-bookmark"></i>
                    Save
                </button>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                                <input type="text" id="title" class="form-control" name="title"
                                    value="{{ old('title') }}" placeholder="enter your title">
                                <br>
                                @error('title')
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <i class="bi bi-exclamation-octagon me-1"></i>
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Slug</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="slug" value="{{ old('slug') }}"
                                    id="slug" placeholder="enter your slug">
                                <br>
                                @error('slug')
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <i class="bi bi-exclamation-octagon me-1"></i>
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Body</label>
                            <div class="col-sm-10">
                                <textarea id="summernote" name="body">{{ old('body') }}</textarea>
                                <br>
                                @error('body')
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <i class="bi bi-exclamation-octagon me-1"></i>
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Types</h5>
                        <div class="row mb-3">
                            <div class="col-sm-10 d-flex">
                                <select class="form-select" aria-label="Default select example" name="type_id">
                                    @foreach ($types as $type)
                                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Featured Image</h5>
                        <div class="row mb-3">
                            <div class="col-sm-10 d-flex">
                                <select class="form-select" aria-label="Default select example" name="media_id">
                                    @foreach ($media as $image)
                                        <option value="{{ $image->id }}">{{ $image->id }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
@section('script')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script>
        $('#title').change(function(e) {
            $.get('{{ route('taxonomy.slug') }}', {
                    'title': $(this).val()
                },
                function(data) {
                    $('#slug').val(data.slug);
                }
            )
        });
        $('#summernote').summernote({
            placeholder: 'enter yout body',
            tabsize: 2,
            height: 100
        });
    </script>
@endsection
