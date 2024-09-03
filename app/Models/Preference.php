<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Preference extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'preferred_density',
        'preferred_trims',
        'preferred_fabrics',
        'preferred_pull_settings',
        'same_color_sew_our',
        'preferred_formats',
        'blending',
        'dgt_additional_instructions',
        'dgt_instructions',
        'underbase',
        'vector_detail_work',
        'vector_file_format',
        'vector_printing_process',
        'vector_color_list',
        'vector_separation',
        'vc_additional_instruction',
        'vc_instructions',
    ];
}
