<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    use HasFactory;
    protected $fillable=['title','description','content','email','phone'];
    protected $cast=[
        'content'=>'array'
    ];
}
