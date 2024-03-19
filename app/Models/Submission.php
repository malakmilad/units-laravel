<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    use HasFactory;
    protected $fillable = ['form','user_id','form_id'];

    protected $casts = [
        'form' => 'array'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function contactForm()
    {
        return $this->belongsTo(ContactForm::class, 'form_id');
    }
}
