<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategorie extends Model
{
    /** @use HasFactory<\Database\Factories\SubcategorieFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'weight',
        'budget',
        'type',
    ];
}
