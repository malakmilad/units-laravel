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
    <div class="card">
        <div class="card-body p-0">
            <table id="form_table" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($forms as $form)
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
                    @endforeach --}}
                </tbody>
            </table>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('#form_table').DataTable({
                "lengthMenu": [
                    [10, 15, 20],
                    [10, 15, 20]
                ],
                "processing": true,
                "serverSide": true,
                "ajax": {
                    "url": "{{ route('form.filter') }}",
                    "type": "GET"
                },
                "columns": [
                    {
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
                        "data": "description",
                        "name": "description",
                        "searchable": false
                    },
                    {
                        "data": "created_at",
                        "name": "created_at",
                        "searchable": false
                    },
                    {
                        "render": function(data, type, row) {
                            let showButton = '<a href="form/show/' + row.id +
                                '" class="bi bi-eye-fill"></a>';
                            let editButton = '<a href="form/edit/' + row.id +
                                '" class="bi bi-pen"></a>';
                            let deleteButton = '<a href="form/destroy/' + row.id +
                                '"><i class="bi bi-trash"></i></a>';
                            return showButton + editButton + deleteButton;
                        }
                    }
                ]
            });
        });
    </script>
@endsection
