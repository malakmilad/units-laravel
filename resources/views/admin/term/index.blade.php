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
    <div class="card">
        <div class="card-body p-0">
            <a href="{{ route('term.create', $taxonomy->id) }}" class="btn btn-primary">
                <i class="bi bi-star me-1">
                </i>
                <span>Add New</span>
            </a>
            <table id="term_table" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Title</th>
                        <th>Slug</th>
                        <th>Body</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
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
    <script>
        $(document).ready(function() {
            const taxId = window.location.pathname.split('/').pop();
            $('#term_table').DataTable({
                "lengthMenu": [
                    [10, 15, 20],
                    [10, 15, 20]
                ],
                "processing": true,
                "serverSide": true,
                "ajax": {
                    "url": "/term/filter/{{$taxonomy->id}}",
                    "type": "GET"
                },
                "columns": [{
                        "data": "id",
                        "name": "id",
                        "searchable": false
                    },
                    {
                        "data": "title",
                        "name": "title",
                        "searchable": true
                    },
                    {
                        "data": "slug",
                        "name": "slug",
                        "searchable": true
                    },
                    {
                        "data": "body",
                        "name": "body",
                        "searchable": false
                    },
                    {
                        "data": "created_at",
                        "name": "created_at",
                        "searchable": false
                    },
                    {
                        "orderable":false,
                        "render": function(data, type, row) {
                            let showButton =
                                '<a class="show-term-btn" data-toggle="modal" data-target="#showTypeCard" data-id="' +
                                row.id +
                                '" style="cursor: pointer"><i class="bi bi-eye-fill"></i></a>';
                            let editButton =
                                '<a class="edit-term-btn" data-toggle="modal" data-target="#editTypeForm" data-id="' +
                                row.id +
                                '" data-tax="' + taxId +
                                '" style="cursor: pointer"><i class="bi bi-pen"></i></a>';
                            let deleteButton = '<a href="/term/destroy/' + row.id +
                                '"><i class="bi bi-trash"></i></a>';
                            return showButton + editButton + deleteButton;
                        }

                    }
                ]
            });
        });
    </script>
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
