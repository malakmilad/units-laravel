<form action="{{ route('type.update', Hashids::encode($type->id)) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row mb-3">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">
                <i class="bi bi-pencil-square"></i>
                Update
            </button>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" id="title" class="form-control" name="name"
                                value="{{ $type->name }}" placeholder="enter your name">
                            <br>
                            @error('name')
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
    </div>
</form>
