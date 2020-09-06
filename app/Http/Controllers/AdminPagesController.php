<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\ProductImage;



use Image;
class AdminPagesController extends Controller
{
    //
    public function index(){
      return view('admin.pages.index');
    }
    public function create(){
      return view('admin.pages.product.create');
    }
    public function edit($id){
      $product=Products::find($id);
      
      return view('admin.pages.product.edit')->with('product',$product);
    }
    // public function delete($id){
    //   $product=Products::find($id);
      
    //   return view('admin.pages.product.edit')->with('product',$product);
    // }
    // public function delete($id){
    //   $product=Products::find($id);
    //   if(!is_null($product)){
    //     $product->delete();
    //   }
    //   // session()->flash('success','delete succesfully');
    //   return redirect()->route('admin.pages.product.manage');
      
    // }
    
    public function manage(){
      $products=Products::orderBy('id','desc')->get();
      

      // $product=new Products;
      // $product->title=$request->title;
      // $product->description=$request->description;
      // $product->price=$request->price;
      // // $product->quantity=$request->quantity;
      // // $product->slug=str_slug($request->title);
      // // $product->offer_price=30000;

      // // $product->category_id=$request->category_id;
      // // $product->brand_id=$request->brand_id;
      // // $product->admin_id=$request->admin_id;
      // // $product->save();

      return view('admin.pages.product.manage')->with('products',$products);
    }
    public function update(Request $request,$id){
      
      $validatedData = $request->validate([
        'title' => 'required',
        'description' => 'required',
        'price' => 'required|numeric',
        
    ]);
      
      $product=Products::find($id);
      $product->title=$request->title;
      $product->description=$request->description;
      $product->price=$request->price;
      // $product->quantity=$request->quantity;
      // $product->slug=str_slug($request->title);
      // $product->offer_price=30000;

      // $product->category_id=$request->category_id;
      // $product->brand_id=$request->brand_id;
      // $product->admin_id=$request->admin_id;
      $product->save();

      // // ProductImage insert
      // if($request->hasFile('product_image')){
      //   //insert image
      //   $image=$request->file('product_image');
      //   $img=time().'.'.$image->getClientOriginalExtension();
      //   $location=public_path('images/products/' .$img);
      //   Image::make($image)->save($location);

      //   $product_image=new ProductImage;
      //   $product_image->product_id=$product->id;
      //   $product_image->image=$img;
      //   $product_image->save();
      return redirect()->route('admin.index');
    }


    public function store(Request $request){
      
      $validatedData = $request->validate([
        'title' => 'required|unique:posts|max:255',
        'description' => 'required',
        'price' => 'required|numeric',
        'quantity' => 'required|numeric',
        
        'offer_price' => 'required|numeric',
    ]);
      
      $product=new Products;
      $product->title=$request->title;
      $product->description=$request->description;
      $product->price=$request->price;
      $product->quantity=$request->quantity;
      $product->slug=str_slug($request->title);
      $product->offer_price=30000;

      $product->category_id=$request->category_id;
      $product->brand_id=$request->brand_id;
      $product->admin_id=$request->admin_id;
      $product->save();

      // // ProductImage insert
      // if($request->hasFile('product_image')){
      //   //insert image
      //   $image=$request->file('product_image');
      //   $img=time().'.'.$image->getClientOriginalExtension();
      //   $location=public_path('images/products/' .$img);
      //   Image::make($image)->save($location);

      //   $product_image=new ProductImage;
      //   $product_image->product_id=$product->id;
      //   $product_image->image=$img;
      //   $product_image->save();



      // }
      // multiple image insert
      if(count($request->product_image)){
        foreach($request->product_image as $image){
          $img=time().'.'.$image->getClientOriginalExtension();
          $location=public_path('images/products/' .$img);
          Image::make($image)->save($location);
  
          $product_image=new ProductImage;
          $product_image->product_id=$product->id;
          $product_image->image=$img;
          $product_image->save();
  

        }
      }
     

      return redirect()->route('admin.pages.product.create');
    }
}
