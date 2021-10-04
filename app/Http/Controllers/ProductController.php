<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductDetail;
use App\Models\Slider;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $slider = Slider::orderBy('slider_id','DESC')->take(3)->get();
        $products = Product::orderBy('id', 'DESC')->paginate(9);
        $category = Category::whereNull('category_id')->with('childrenCategories')->get();
        return view('pages.sanpham.show_sp')->with('products',$products)->with('category',$category);
    }

    public function show_detail($id){

        // $productID2 = Product::join('categories','categories.id','=','products.category_id')->where('product_id', $id)->get();
        
        $productID = ProductDetail::join('products','products.id','=','product_details.product_id')
        ->join('sizes','sizes.id','=','product_details.size_id')
        ->where('product_id', $id)->get();

        // $product_size = ProductDetail::join('sizes','sizes.id','=','product_details.size_id')->where('product_id', $id)->get();

        
        // $productID = ProductDetail::with('productID')->where('product_id', $id)->get();
        // dd($productID);
        
        $category = Category::whereNull('category_id')->with('childrenCategories')->get();
        return view('pages.sanpham.detail')->with('productID',$productID)
        // ->with('product_size',$product_size)
        ->with('category',$category);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
