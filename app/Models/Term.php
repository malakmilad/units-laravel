<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Term extends Model
{
    use HasFactory,Sluggable;
    protected $fillable = ['media_id', 'taxonomy_id', 'title', 'slug', 'body','sub_term_id'];
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title',
            ],
        ];
    }
    public function media()
    {
        return $this->belongsTo(Media::class);
    }
    public function taxonomy()
    {
        return $this->belongsTo(Taxonomy::class);
    }
    public function blogs()
    {
        return $this->belongsToMany(Blog::class);
    }
}
