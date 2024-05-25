<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Gift extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'path_image',
        'quotas',
        'value'
    ];

    protected function pathImage(): Attribute
    {
        return Attribute::make(
            get: fn (?string $value) => empty($value) ? "" : asset(Storage::url($value)),
        );
    }
}
