<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Discount;
use Illuminate\Support\Facades\Auth;
use App\Models\CartItem;
use Illuminate\Support\Facades\URL;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::orderByDesc('id')->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all()->sortBy('name');
        $discounts = Discount::all()->sortBy('name');
        return view('products.create' , compact('categories','discounts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pro = new Product();

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('imgs/offers/', $filename);
            $pro->image = $filename;
        }


        $pro->name = $request->input('name');
        $pro->price = $request->input('price');
        $pro->category_id = $request->input('category_id');
        $pro->discount_id = $request->input('discount_id');
        $pro->description = $request->input('description');
        $pro->gender = $request->input('gender');

        $pro->save();
        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show' , compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect('/dashboard');
    }
    public function addToCart(Request $req){
        if(Auth::check())
        {
            $cart = new CartItem();
            $cart->user_id = Auth::user()->id;
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect('/');
        }
        else {
            return redirect('/login');
        }
    }
    static function Cart(){
        if(Auth::check()){
        $userId = Auth::user()->id;
        return CartItem::where('user_id' , $userId)->count();
        }
        else {
            return redirect('/login');
        }
    }
    public function search(Request $req){

        $data = Product::where
        ('name','like', '%'.$req->input('query').'%')->get();
        return view('inc.search', ['clothes_3' =>$data]);
    }
}
