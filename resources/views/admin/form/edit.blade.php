@extends('admin.layouts.app')
@section('page-title')
    Welcome
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="col-md-12">
                <label for="inputText" class="form-label">Title</label>
                <input type="text" id="title" class="form-control" name="title" placeholder="enter your title">
                <br>
                @error('title')
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="bi bi-exclamation-octagon me-1"></i>
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-md-12">
                <label for="inputText" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" placeholder="enter your description"></textarea>
                <br>
                @error('description')
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="bi bi-exclamation-octagon me-1"></i>
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-md-12">
                <label for="inputText" class="form-label">Content</label>
                <div id="form-editor"></div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <script src="https://formbuilder.online/assets/js/form-builder.min.js"></script>
    <script>
        let formContent = document.getElementById("form-editor");
        let formBuilder ;
            $.ajax({
            type: 'get',
            url: '{{ route('form.getData') }}',
            data: {
                'id': {{ $contactForm->id }},
            },
            success: function(data) {
                $('#title').val(data.title);
                $('#description').val(data.description);
                debugger
                const content = data.content;
                formBuilder = $(formContent).formBuilder({
            onSave: function(evt, formData) {
                saveForm(formData);
            },
            defaultFields: JSON.parse(content)
            //formBuilder.actions.setData(content);
        });
            },
            error: function(xhr, textStatus, errorThrown) {
                console.error(xhr.statusText);
            }
        });

        function saveForm(form) {
            $.ajax({
                type: "PUT",
                url: '{{ route('form.update', $contactForm->id) }}',
                data: {
                    'content': form,
                    'title': $("#title").val(),
                    'description': $('#description').val(),
                    "_token": "{{ csrf_token() }}"
                },
                success: function(data) {
                    location.href = "{{ route('form.index') }}";
                }
            });
        }
    </script>
@endsection
