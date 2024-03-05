<form action="{{ route('blog.update', Hashids::encode($blog->id)) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="hidden" name="type_id" value="{{$blog->type_id}}">
    <div class="row mb-3">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">
                <i class="bi bi-pencil-square"></i>
                Update
            </button>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                            <input type="text" id="title" class="form-control" name="title"
                                value="{{ $blog->title }}">
                            <br>
                            @error('title')
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <i class="bi bi-exclamation-octagon me-1"></i>
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Slug</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="slug" value="{{ $blog->slug }}"
                                id="slug">
                            <br>
                            @error('slug')
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <i class="bi bi-exclamation-octagon me-1"></i>
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Body</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" style="height: 100px" name="body">{{ $blog->body }}</textarea>
                            <br>
                            @error('body')
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <i class="bi bi-exclamation-octagon me-1"></i>
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Taxonomies</h5>
                    <div class="row mb-3">
                        <div class="col-sm-10">
                            @foreach ($taxonomies as $taxonomy)
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="taxonomy_{{ $taxonomy->id }}"
                                        name="taxonomy_id[]" value="{{ $taxonomy->id }}"
                                        {{ $blog->taxonomies->contains($taxonomy->id) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="taxonomy_{{ $taxonomy->id }}">
                                        {{ $taxonomy->title }}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Featured Image</h5>
                    <div class="row mb-3">
                        <div class="col-sm-10">
                            <select class="form-select" aria-label="Default select example" name="media_id">
                                @foreach ($media as $image)
                                    <option value="{{ $image->id }}">{{ $image->id }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
{{-- @endsection
@section('script')
    <script>
        $('#title').change(function(e) {
            $.get('{{ route('blog.slug') }}', {
                    'title': $(this).val()
                },
                function(data) {
                    $('#slug').val(data.slug);
                }
            )
        });
    </script>
@endsection --}}
