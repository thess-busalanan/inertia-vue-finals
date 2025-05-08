<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    // Add 'title' to the fillable array
    protected $fillable = [
        'title',  // Allow mass assignment for the title
        'file_path',  // Assuming this is also a fillable attribute
    ];
}
