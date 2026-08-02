<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [

        'company_name',
        'logo',

        'hero_title',
        'hero_subtitle',

        'about',

        'phone',
        'email',
        'address',

        'open_days',
        'open_hours',
        'holiday',

        'facebook',
        'instagram',
        'tiktok',

        'maps',

    ];
}