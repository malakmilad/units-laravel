@extends('admin.layouts.app')
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
    <div class="d-flex justify-content-center" id="pagination-links">
        {{ $taxonomies->links() }}
    </div>
    <div class="card">
        <div class="card-body p-0">
            <table class="table">
                <thead>
                    <tr>
                        <th style="width: 10px">id</th>
                        <th>Title</th>
                        <th>Slug</th>
                        <th>Body</th>
                        <th>Type</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($taxonomies as $taxonomy)
                        <tr>
                            <td>{{ $taxonomy->id }}</td>
                            <td>{{ $taxonomy->title }}</td>
                            <td>{{ $taxonomy->slug }}</td>
                            <td>{{ $taxonomy->body }}</td>
                            <td>
                                @php
                                    $types = $taxonomy->types;
                                @endphp
                                @foreach ($types as $type)
                                    {{ $type->name }},
                                @endforeach
                            </td>
                            <td><img width="150" height="100"
                                    src="{{ asset($taxonomy->media->path . '/' . $taxonomy->media->featured_image) }}"></td>
                            <td>
                            <a class="show-tax-btn" data-toggle="modal" data-target="#showTaxCard"
                                data-id="{{ Hashids::encode($taxonomy->id) }}" style="cursor: pointer">
                                <i class="bi bi-eye-fill"></i>
                            </a>
                            <a class="edit-tax-btn" data-toggle="modal" data-target="#editTaxForm"
                                data-id="{{ Hashids::encode($taxonomy->id) }}" style="cursor: pointer">
                                <i class="bi bi-pen"></i>
                            </a>
                            <a href="{{ route('taxonomy.destroy', Hashids::encode($taxonomy->id)) }}"><i
                                    class="bi bi-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- End Basic Modal-->
    <div class="modal fade" id="editTaxForm" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Taxonomy</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="editTaxBody">
                </div>
            </div>
        </div>
    </div>
    <!-- End Basic Modal-->
    <!-- End Basic Modal-->
    <div class="modal fade" id="showTaxCard" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Taxonomy Detial</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="showTaxBody">
                </div>
            </div>
        </div>
    </div>
    <!-- End Basic Modal-->
@endsection
@section('script')
    <script src="{{ asset('assets/js/taxonomy/edit.js') }}"></script>
    <script src="{{ asset('assets/js/taxonomy/show.js') }}"></script>
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
