<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'cat_first_word',
        'cat_remaining_word',
        'cat_description',
        'cat_sequence_no',
        'cat_bg_image',
        
    ];
}
