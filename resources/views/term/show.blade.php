<div class="card">
    <div class="card-body">
        <h5 class="card-title">{{ $term->title }}</h5>
        <p class="card-text">{{ $term->body }}</p>
    </div>
    <img src="{{ asset('FeaturedMedia' . '/' . $term->media->featured_image) }}" height="450">
</div>
