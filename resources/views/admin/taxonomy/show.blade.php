<div class="card">
    <div class="card-body">
      <h5 class="card-title">{{$taxonomy->title}}</h5>
      <p class="card-text">{{$taxonomy->body}}</p>
    </div>
    <img src="{{ asset($taxonomy->media->path . '/' . $taxonomy->media->featured_image) }}" height="450">
  </div>
