<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patch extends Model
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
    ];
}
