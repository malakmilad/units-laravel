@extends('admin.layouts.app')
@section('page-title')
    Welcome
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/blog.css') }}">
    <style>
        @media (min-width: 576px) {
            .modal-dialog {
                max-width: 930px !important;
                margin: 1.75rem auto;
            }
        }
    </style>
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
            <table id="blog_table" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Title</th>
                        <th>Slug</th>
                        @foreach ($taxonomies as $taxonomy)
                            <th class="tax" data-id="{{ $taxonomy->id }}">{{ $taxonomy->title }}
                            </th>
                        @endforeach
                        <th>Start time</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End Basic Modal-->
    <div class="modal fade" id="editBlogForm" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Blog</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="editBlogBody">
                </div>
            </div>
        </div>
    </div>
    <!-- End Basic Modal-->
    <!-- End Basic Modal-->
    <div class="modal fade" id="showBlogCard" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Blog Detial</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="showBlogBody">
                </div>
            </div>
        </div>
    </div>
    <!-- End Basic Modal-->
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            const typeId = window.location.pathname.split('/').pop();
            const table = $('#blog_table').DataTable({
                initComplete: function() {
                    const api = this.api();
                    const taxonomies = @json($taxonomies);
                    taxonomies.forEach(function(taxonomy) {
                        $.ajax({
                            url: `/fetch_terms/${taxonomy.id}`,
                            type: 'GET',
                            success: function(response) {
                                api.columns('.tax[data-id="' + taxonomy.id + '"]')
                                    .every(function() {
                                        const column = this;
                                        const select = $(
                                                '<select><option value=""></option></select>'
                                            )
                                            .appendTo($(column.header()))
                                            .on('change', function() {
                                                column.search(select
                                                    .val(), {
                                                        exact: true
                                                    }).draw();
                                            });
                                        $.each(response, function(key, value) {
                                            select.append(
                                                `<option value="${value.id}">${value.title}</option>`
                                            );
                                        });
                                    });
                            }
                        });
                    })
                },
                lengthMenu: [
                    [10, 15, 20],
                    [10, 15, 20]
                ],
                processing: true,
                serverSide: true,
                ajax: {
                    url: `/blog/filter/${typeId}`,
                    type: 'GET'
                },
                columns: [{
                        data: 'id',
                        name: 'id',
                        searchable: false
                    },
                    {
                        data: 'title',
                        name: 'title',
                        searchable: true
                    },
                    {
                        data: 'slug',
                        name: 'slug',
                        searchable: true
                    },
                    @foreach ($taxonomies as $taxonomy)
                        {
                            data: '{{ $taxonomy->slug }}',
                            name: '{{ $taxonomy->slug }}',
                            searchable: false,
                            orderable: false,
                            "render": function(data, type, row) {
                                tax_id = {{ $taxonomy->id }};
                                var terms_list = '';
                                row.terms.map((term => {
                                    if (term.taxonomy_id == tax_id) {
                                        terms_list += term.body + ", ";
                                    }
                                }))
                                return terms_list.slice(0, -2);
                            }
                        },
                    @endforeach {
                        data: 'created_at',
                        name: 'created_at',
                        searchable: false
                    },
                    {
                        render: function(data, type, row) {
                            const showButton =
                                `<a class="show-blog-btn" data-toggle="modal" data-target="#showBlogCard" data-id="${row.id}" style="cursor: pointer"><i class="bi bi-eye-fill"></i></a>`;
                            const editButton =
                                `<a class="edit-blog-btn" data-toggle="modal" data-target="#editBlogForm" data-id="${row.id}" data-type="${typeId}" style="cursor: pointer"><i class="bi bi-pen"></i></a>`;
                            const deleteButton =
                                `<a href="/blog/destroy/${row.id}"><i class="bi bi-trash"></i></a>`;
                            return showButton + editButton + deleteButton;
                        },
                        orderable: false
                    }
                ]
            });
        });
    </script>
    <script src="{{ asset('assets/js/blog/edit.js') }}"></script>
    <script src="{{ asset('assets/js/blog/show.js') }}"></script>
@endsection
