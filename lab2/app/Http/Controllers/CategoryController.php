<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(Request $request, $category)
    {
        $category = Category::where('name', $category)->firstOrFail();
            
        if (!$category->active) {
            abort(404);
        }

        $minPrice = $request->input('min_price', 0);
        $maxPrice = $request->input('max_price', 999999);

        $products = $category->products()
            ->where('cost', '>', $minPrice)
            ->where('cost', '<', $maxPrice)
            ->paginate(10);

        return view('categories.show', compact('category', 'products'));
    }
}
