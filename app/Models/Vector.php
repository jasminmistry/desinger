<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vector extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'po',
        'placement',
        'width',
        'height',
        'unit',
        'no_of_colors',
        'febric_color',
        'additional_instruction',
        'trapping',
        'psd_color',
        'amount_of_details',
        'color_type',
        'separation',
        'underbase',
        'vector_detail_work',
        'vector_file_format',
        'vector_printing_process',
        'vector_color_list',
        'vector_separation',
        'instructions'
    ];
}
