@extends('admin.layouts.app')
@section('page-title')
    Welcome
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">General Form Elements</h5>
            <form action="{{ route('setting.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-pencil-square"></i>
                            Update
                        </button>
                    </div>
                </div>
                @foreach ($settings as $setting)
                    @if ($setting->key === 'logo')
                        <div class="row mb-3">
                            <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" id="formFile" name="logo">
                            </div>
                        </div>
                    @else
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">{{ $setting->key }}</label>
                            <div class="col-sm-10">
                                <input type="{{ $setting->key }}" class="form-control" value="{{ $setting->value }}">
                            </div>
                        </div>
                    @endif
                @endforeach
            </form>
        </div>
    </div>
@endsection
