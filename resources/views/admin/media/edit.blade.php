<form class="row g-3" method="POST" action="{{route('media.update',Hashids::encode($media->id))}}">
    @csrf
    @method('PUT')
    <div class="col-md-6">
        <label for="inputName5" class="form-label">Title</label>
        <input type="text" class="form-control" id="inputName5" name="title" value="{{ $media->title }}">
    </div>
    <div class="col-md-6">
        <label for="inputName5" class="form-label">Alternative Text</label>
        <input type="text" class="form-control" id="inputName5" name="alternative_text"
            value="{{ $media->alternative_text }}">
    </div>
    <div class="col-md-6">
        <label for="inputName5" class="form-label">Caption</label>
        <input type="text" class="form-control" id="inputName5" name="caption" value="{{ $media->caption }}">
    </div>
    <div class="col-md-6">
        <label for="inputName5" class="form-label">Description</label>
        <textarea class="form-control" style="height: 100px" name="description">{{ $media->description }}</textarea>
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-primary">
            <i class="bi bi-pencil-square"></i>
            Update
        </button>
    </div>
</form>
