<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MonthlyBudget;

class MonthlyBudgetController extends Controller
{
    public function index()
    {
        $budgets = MonthlyBudget::all();
        return response()->json(['data' => $budgets]);
    }
}
