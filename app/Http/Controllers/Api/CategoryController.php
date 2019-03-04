<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryController extends Controller
{
    private $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }
    
    public function index(Category $category, Request $request)
    {
        $categories = $category->getResults($request->name);

        return response()->json($categories, 200);
    }

    public function store(Request $request)
    {
        $category = $this->category->create($request->all());

        return response()->json($category, 201);
    }
}
