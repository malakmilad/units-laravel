<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Taxonomy extends Model
{
    use HasFactory,Sluggable;
    protected $fillable = ['title', 'slug', 'body', 'media_id'];
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title',
            ],
        ];
    }
    public function blogs()
    {
        return $this->belongsToMany(Blog::class);
    }
    public function media()
    {
        return $this->belongsTo(Media::class);
    }
    public function types()
    {
        return $this->belongsToMany(Type::class);
    }
    public function terms()
    {
        return $this->hasMany(Term::class);
    }
}
