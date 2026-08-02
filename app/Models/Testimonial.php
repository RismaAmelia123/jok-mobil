<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'job',
        'message',
        'photo',
        'rating',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}