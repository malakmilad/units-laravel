@extends('admin.layouts.app')
@section('page-title')
    Welcome
@endsection
@section('content')
    @if (Session::has('success'))
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <i class="bi bi-check-circle me-1"></i>
            {{ Session::get('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="d-flex justify-content-center" id="pagination-links">
        {{ $forms->links() }}
    </div>
    <div class="card">
        <div class="card-body p-0">
            <table class="table">
                <thead>
                    <tr>
                        <th style="width: 10px">id</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($forms as $form)
                        <tr>
                            <td>{{ $form->id }}</td>
                            <td>{{ $form->title }}</td>
                            <td>{{ $form->description }}</td>
                            <td>
                                <a href="{{ route('form.show', $form->id) }}" class="bi bi-eye-fill"></a>
                                <a href="{{ route('form.edit', $form->id) }}" class="bi bi-pen"></a>
                                <a href="{{ route('form.destroy', $form->id) }}" class="bi bi-trash"></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
