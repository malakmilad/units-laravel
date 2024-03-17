<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;
    const MEDIA_PATH = 'FeaturedMedia';
    protected $fillable = ['featured_image', 'name', 'path','full-path','size','mtime'];
    protected $casts = [
        'featured_image' => 'array',
    ];
    public function blog()
    {
        return $this->hasOne(Blog::class);
    }
    public function taxonomy()
    {
        return $this->hasOne(Taxonomy::class);
    }
    public function term()
    {
        return $this->hasOne(Term::class);
    }

}
