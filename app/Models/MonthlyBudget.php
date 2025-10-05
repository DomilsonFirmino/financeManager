<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MonthlyBudget extends Model
{
    /** @use HasFactory<\Database\Factories\MonthlyBudgetFactory> */
    use HasFactory;

    protected $fillable = [
        'month',
        'year',
        'amount',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
