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
            <table class="table">
                <thead>
                    <tr>
                        <th style="width: 10px">id</th>
                        <th>Title</th>
                        <th>Slug</th>
                        <th>Body</th>
                        <th>Taxonomies</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($blogs as $blog)
                        <tr>
                            <td>{{ $blog->id }}</td>
                            <td>{{ $blog->title }}</td>
                            <td>{{ $blog->slug }}</td>
                            <td>{{ $blog->body }}</td>
                            <td>
                                @php
                                    $taxonomies = $blog->taxonomies;
                                @endphp
                                @foreach ($taxonomies as $taxonomy)
                                    {{ $taxonomy->title }},
                                @endforeach
                            </td>
                            <td><img width="150" height="100"
                                    src="{{ asset('FeaturedMedia' . '/' . $blog->media->featured_image) }}" alt="">
                            </td>
                            <td>
                                <a class="show-blog-btn" data-toggle="modal" data-target="#showBlogCard"
                                    data-id="{{ Hashids::encode($blog->id) }}" style="cursor: pointer">
                                    <i class="bi bi-eye-fill"></i>
                                </a>
                                <a class="edit-blog-btn" data-toggle="modal" data-target="#editBlogForm"
                                    data-id="{{ Hashids::encode($blog->id) }}" style="cursor: pointer">
                                    <i class="bi bi-pen"></i>
                                </a>
                                <a href="{{ route('blog.destroy', Hashids::encode($blog->id)) }}"><i
                                        class="bi bi-trash"></i></a>
                                {{-- <a class="toggle-edit-btn" id="edit_category_btn">
                                    <i class="bi bi-list "></i>
                                </a> --}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{-- <aside id="edit_category_form" class="edit">
        <button type="button" class="btn-close close_edit_category"></button>
    </aside> --}}
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
    <script src="{{ asset('assets/js/blog/edit.js') }}"></script>
    <script src="{{ asset('assets/js/blog/show.js') }}"></script>
@endsection
