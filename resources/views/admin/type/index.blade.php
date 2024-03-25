@extends('admin.layouts.app')
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
            <table id="type_table" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($types as $type)
                        <tr>
                            <td>{{ $type->id }}</td>
                            <td>{{ $type->name }}</td>
                            <td>
                                <a class="show-type-btn" data-toggle="modal" data-target="#showTypeCard"
                                    data-id="{{ Hashids::encode($type->id) }}" style="cursor: pointer">
                                    <i class="bi bi-eye-fill"></i>
                                </a>
                                <a class="edit-type-btn" data-toggle="modal" data-target="#editTypeForm"
                                    data-id="{{ Hashids::encode($type->id) }}" style="cursor: pointer">
                                    <i class="bi bi-pen"></i>
                                </a>
                                <a href="{{ route('type.destroy', Hashids::encode($type->id)) }}"><i class="bi bi-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach --}}
                </tbody>
            </table>
            <!-- End Basic Modal-->
            <div class="modal fade" id="editTypeForm" tabindex="-1" style="display: none;" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Type</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" id="editTypeBody">
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Basic Modal-->
            <!-- End Basic Modal-->
            <div class="modal fade" id="showTypeCard" tabindex="-1" style="display: none;" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Type</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" id="showTypeBody">
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Basic Modal-->
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('#type_table').DataTable({
                "lengthMenu": [
                    [10, 15, 20],
                    [10, 15, 20]
                ],
                "processing": true,
                "serverSide": true,
                "ajax": {
                    "url": "{{ route('type.filter') }}",
                    "type": "GET"
                },
                "columns": [{
                        "data": "id",
                        "name": "id",
                        "searchable": false
                    },
                    {
                        "data": "name",
                        "name": "name",
                        "searchable": true
                    },
                    {
                        "data": "created_at",
                        "name": "created_at",
                        "searchable": false
                    },
                    {
                        "render": function(data, type, row) {
                            let showButton =
                                '<a class="show-type-btn" data-toggle="modal" data-target="#showTypeCard" data-id="' +
                                row.id +
                                '" style="cursor: pointer"><i class="bi bi-eye-fill"></i></a>';
                            let editButton =
                                '<a class="edit-type-btn" data-toggle="modal" data-target="#editTypeForm" data-id="' +
                                row.id +
                                '" style="cursor: pointer"><i class="bi bi-pen"></i></a>';
                            let deleteButton = '<a href="/type/destroy/' + row.id +
                                '"><i class="bi bi-trash"></i></a>';
                            return showButton + editButton + deleteButton;
                        }
                    }
                ]
            });
        });
    </script>
    <script src="{{ asset('assets/js/type/edit.js') }}"></script>
    <script src="{{ asset('assets/js/type/show.js') }}"></script>
@endsection
