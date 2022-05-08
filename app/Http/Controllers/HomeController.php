<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Blog;
use App\Models\Category;
use App\Models\File;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function home()
    {
        $categories = Category::orderBy('id', 'DESC')->get()->take(4);
        $products = Product::orderBy('id', 'DESC')->get();
        $blogs = Blog::orderBy('id', 'DESC')->get()->take(4);
        $tel=Address::orderBy('id', 'DESC')->get()->take(1);
        $pdf = File::orderBy('id', 'DESC')->get()->take(1);

        return view('index',[

            'categories' => $categories,
            'products' => $products,
            'blogs' => $blogs,
            'tel'=>$tel,
            'pdf'=>$pdf


        ]);
    }

   /* public function download($file)
    {
        $fil = File::firstOrFail($file);
        $folder=date("FY");
        if(Storage::disk('public')->exists("files/$folder/$fil->file")){

            $path=Storage::disk('public')->asset("files/$folder/$fil->file");
            $content = file_get_contents($path);
            return response($content)->withHeaders([
                'Content-Tipe' => mime_content_type($path)
            ]);
        }
    }*/
}
