<?php

namespace App\Http\Controllers;
use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index ()
    {
        $categories = Category::all();
        $recentProducts = Product::orderBy('created_at', 'desc')->take(8)->get();
        return view('FrontEnd.master', [ 
        'categories' => $categories,
        'recentProducts' => $recentProducts 
]);
    }
}
