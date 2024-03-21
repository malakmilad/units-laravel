@extends('admin.layouts.app')
@section('page-title')
    Welcome
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="col-md-12">
                <label for="inputText" class="form-label">Title</label>
                <input type="text" id="title" class="form-control" name="title" value="{{ old('title') }}"
                    placeholder="enter your title">
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
                <textarea class="form-control" name="description" id="description" placeholder="enter your description">{{ old('description') }}</textarea>
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
            <br>
            <div class="col-md-12">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="admin_email">
                    <label class="form-check-label" for="flexSwitchCheckDefault">email</label>
                </div>
                <div id="emailContainer" style="display: none;">
                    <label for="inputText" class="form-label">Email</label>
                    <input type="email"class="form-control" name="email" id="email" placeholder="enter your email">
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" name="admin_sms">
                    <label class="form-check-label" for="flexSwitchCheckChecked">Sms</label>
                </div>
                <div id="phoneNumberContainer" style="display: none;">
                    <label for="inputText" class="form-label">Phone Number</label>
                    <input type="number" class="form-control" name="phone" id="phone"
                        placeholder="enter your phone number">
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        const emailCheck = document.getElementById('flexSwitchCheckDefault');
        const emailContainer = document.getElementById('emailContainer');
        emailCheck.addEventListener('change', function() {
            if (emailCheck.checked) {
                emailContainer.style.display = 'block';
            } else {
                emailContainer.style.display = 'none';
            }
        })
        const phoneCheck = document.getElementById('flexSwitchCheckChecked');
        const phoneContainer = document.getElementById('phoneNumberContainer');
        phoneCheck.addEventListener('change', function() {
            if (phoneCheck.checked) {
                phoneContainer.style.display = 'block';
            } else {
                phoneContainer.style.display = 'none';
            }
        })
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <script src="https://formbuilder.online/assets/js/form-builder.min.js"></script>
    <script>
        jQuery(function($) {
            $(document.getElementById('form-editor')).formBuilder({
                onSave: function(evt, formData) {
                    console.log(formData);
                    saveForm(formData);
                }
            });
        });
        function saveForm(form) {
            var formData = {
                'content': form,
                'title': $("#title").val(),
                'description': $('#description').val(),
                "_token": "{{ csrf_token() }}"
            };
            if ($('#flexSwitchCheckDefault').is(':checked')) {
                formData['email'] = $('#email').val();
            }

            if ($('#flexSwitchCheckChecked').is(':checked')) {
                formData['phone'] = $('#phone').val();
            }
            $.ajax({
                type: "post",
                url: "{{ route('form.store') }}",
                data: formData,
                success: function(data) {
                    location.href = "{{ route('form.index') }}";
                }
            });
        }
    </script>
@endsection
