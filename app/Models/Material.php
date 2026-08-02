<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Material extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id',
        'name',
        'type',
        'price',
        'image',
        'is_active',
    ];
    protected $casts = [
        'is_active' => 'boolean',
    ];
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}