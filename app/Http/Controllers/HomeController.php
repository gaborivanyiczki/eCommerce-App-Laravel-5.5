<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Products;
use App\Settings;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
         $products = Products::all();
         $categories = Category::with('children')->get();
         $brands = Brand::all();

        return view('home', compact('products', 'categories', 'brands'));
    }

    public function getCategory($slug)
    {
        $category = Category::where('slug', '=', $slug)->first();

        return view('category', compact('category'));

    }

}
