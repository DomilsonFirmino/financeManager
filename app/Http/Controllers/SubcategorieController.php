<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subcategorie;

class SubcategorieController extends Controller
{
    public function index()
    {
        $subcategories = Subcategorie::all();
        return response()->json(['data' => $subcategories]);
    }
}
