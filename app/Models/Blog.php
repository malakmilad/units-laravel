<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Blog extends Model
{
    use HasFactory, Sluggable;
    protected $fillable = ['title', 'slug', 'body', 'media_id'];
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title',
            ],
        ];
    }
    public function taxonomies()
    {
        return $this->belongsToMany(Taxonomy::class);
    }
    public function media()
    {
        return $this->belongsTo(Media::class);
    }
    public function types()
    {
        return $this->belongsToMany(Type::class);
    }
}
