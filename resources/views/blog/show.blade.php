<div class="card">
    <div class="card-body">
        <h5 class="card-title">{{$blog->title}}</h5>
        <p class="card-text">{{$blog->body}}</p>
    </div>
    <img src="{{ asset('FeaturedMedia' . '/' . $blog->media->featured_image) }}" height="450">
</div>
