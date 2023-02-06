<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('front.categories.index', ['categories' => $categories]);
    }
    public function show(Category $category)
    {
        return view('front.categories.show', ['category' => $category]);
    }

}
