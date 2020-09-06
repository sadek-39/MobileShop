<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class PagesController extends Controller
{
    //
    public function index()
    {
      return view('pages.index');
    }
    public function contact()
    {
      return view('pages.contact');
    }
    public function products()
    {
      $products=Products::orderBy('id','desc')->get();
      return view('pages.products.products')->with('products',$products);
    }
}
