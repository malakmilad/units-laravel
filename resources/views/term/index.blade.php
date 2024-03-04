@extends('layouts.dashborad.admin')
@section('page-title')
    Welcome
@endsection
@section('css')
    <style>
        @media (min-width: 576px) {
            .modal-dialog {
                max-width: 930px !important;
                margin: 1.75rem auto;
            }
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/summernote.css') }}">
@endsection
@section('content')
    @if (Session::has('success'))
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <i class="bi bi-check-circle me-1"></i>
            {{ Session::get('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="card">
        <div class="card-body p-0">
            <table class="table">
                <thead>
                    <tr>
                        <th style="width: 10px">id</th>
                        <th>Title</th>
                        <th>Slug</th>
                        <th>Body</th>
                        <th>Taxonomies</th>
                        <th>Media</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($terms as $term)
                        <tr>
                            <td>{{ $term->id }}</td>
                            <td>{{ $term->title }}</td>
                            <td>{{ $term->slug }}</td>
                            <td>{{ $term->body }}</td>
                            <td>{{ $term->taxonomy->title }}</td>
                            <td><img width="150" height="100"
                                    src="{{ asset('FeaturedMedia' . '/' . $term->media->featured_image) }}"></td>
                            <td>
                                <a class="show-term-btn" data-toggle="modal" data-target="#showTermCard"
                                    data-id="{{ Hashids::encode($term->id) }}" style="cursor: pointer">
                                    <i class="bi bi-eye-fill"></i>
                                </a>
                                <a class="edit-term-btn" data-toggle="modal" data-target="#editTermForm"
                                    data-id="{{ Hashids::encode($term->id) }}" style="cursor: pointer">
                                    <i class="bi bi-pen"></i>
                                </a>
                                <a href="{{ route('term.destroy', Hashids::encode($term->id)) }}"><i class="bi bi-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- End Basic Modal-->
    <div class="modal fade" id="editTermForm" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Term</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="editTermBody">
                </div>
            </div>
        </div>
    </div>
    <!-- End Basic Modal-->
    <!-- End Basic Modal-->
    <div class="modal fade" id="showTermCard" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Term Detial</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="showTermBody">
                </div>
            </div>
        </div>
    </div>
    <!-- End Basic Modal-->
@endsection
@section('script')
    <script src="{{ asset('assets/js/term/edit.js') }}"></script>
    <script src="{{ asset('assets/js/term/show.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script>
        $('#title').change(function(e) {
            $.get('{{ route('term.slug') }}', {
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
