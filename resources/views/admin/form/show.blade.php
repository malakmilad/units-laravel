@extends('admin.layouts.app')

@section('page-title')
    Welcome
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <form id="submission">
                <input type="hidden" name="form_id" id="form_id">
                <input type="hidden" name="user_id" id="user_id" value="{{ Auth::user()->id }}">
                <div id="fb-render"></div>
                <input type="submit" value="save" class="btn btn-success" id="btn-submit">
            </form>
        </div>
    </div>
@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <script src="https://formbuilder.online/assets/js/form-render.min.js"></script>
    <script>
        $(function() {
            let formDataContent;
            $.ajax({
                type: 'get',
                url: '{{ route('form.getData') }}',
                data: {
                    'id': {{ $contactForm->id }},
                },
                success: function(data) {
                    $("#form_id").val(data.id);
                    formDataContent = data.content;
                    $("#fb-render").formRender({
                        formData: formDataContent
                    });
                }
            });

            let btn = document.getElementById("btn-submit");
            btn.addEventListener("click", function(e) {
                e.preventDefault();
                saveSubmit();
            });

            function saveSubmit() {
                const data = $("#submission").serializeArray();
                let formId;
                let userId;
                let adminEmail;
                let adminSms;
                let Data = {};
                for (const item of data) {
                    if (item.name == "form_id") {
                        formId = item.value;
                    } else if (item.name == 'user_id') {
                        userId = item.value;
                    } else {
                        Data[item.name] = item.value;
                    }
                }
                $.ajax({
                    type: 'post',
                    url: '{{ route('form.submit') }}',
                    data: {
                        'form_id': formId,
                        'user_id': userId,
                        'form': Data,
                        "_token": "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        location.href = "{{ route('form.index') }}";
                        console.log(response);
                    },
                });
            }
        });
    </script>
@endsection
