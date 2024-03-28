@extends('admin.layouts.app')
@section('page-title')
    Welcome
@endsection
@section('content')
    <h5 class="card-title">Add New Type</h5>
    <form action="{{ route('type.store') }}" method="POST">
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
                            <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" id="title" class="form-control" name="name"
                                    value="{{ old('name') }}" placeholder="enter your name">
                                <br>
                                @error('name')
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
                        <h5 class="card-title">Taxonomies</h5>
                        <div class="row mb-3">
                            <div class="col-sm-10">
                                @foreach ($taxonomies as $taxonomy)
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck1" name="taxonomy_id[]"
                                            value="{{ $taxonomy->id }}">
                                        <label class="form-check-label" for="gridCheck1">
                                            {{ $taxonomy->title }}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
