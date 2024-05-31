<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Digitizing extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'po',
        'placement',
        'width',
        'height',
        'unit',
        'febric_type',
        'no_of_colors',
        'febric_color',
        'thread_type',
        'background_filled',
        'picture_path',
        'picture_name',
        'preferred_density',
        'preferred_trims',
        'preferred_fabrics',
        'preferred_pull_settings',
        'same_color_sew_our',
        'preferred_formats',
        'blending',
        'additional_instructions',
        'instructions'
    ];

}
