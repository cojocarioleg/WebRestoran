<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function menu()
    {
        $categories = Category::orderBy('id', 'DESC')->get()->take(4);


        return view('menu',[

            'categories' => $categories,

        ]);
    }

    public function showCategory($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();

        return view('showCategory',[
            'category'=>$category,
        ]);
    }

    public function showProduct($slugCategory, $slugProduct)
    {
        $product = Product::where('slug', $slugProduct)->firstOrFail();

        return view('showProduct',[
            'product'=>$product,
        ]);
    }
}
