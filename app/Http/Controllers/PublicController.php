<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Recipe;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage() {
        $recipes = Recipe::orderBy('created_at', 'desc')->take(3)->get();
        $categories = Category::all();
        return view('welcome', compact('recipes', 'categories'));
    }
}
