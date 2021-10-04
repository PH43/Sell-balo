<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function error_page(){
        return view('errors.404');
    }

    public function index()
    {
        
        $slider = Slider::orderBy('slider_id','DESC')->take(3)->get();
        // $slider = Slider::take(3)->get();
        //seo 
        $meta_desc = "Chuyên bán những phụ kiện , balo học sinh"; 
        $meta_keywords = "phụ kiện ,hộp viết, mũ, balo học sinh";
        $meta_title = "Phụ kiện,balo";
        // $url_canonical = $request->url();
        //--seo
        
    	// $cate_product = DB::table('categories')->orderby('category_id','desc')->get(); 
     
        $category = Category::whereNull('category_id')->with('childrenCategories')->get();

        // $new_product = DB::table('products')->orderby(DB::raw('RAND()'))->paginate(6); 
        $new_product = Product::orderby('id','desc')->take(8)->get(); 

    	return view('pages.home')->with('new_product',$new_product)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical')->with('category',$category)->with('slider',$slider); //1
        // return view('pages.home')->with(compact('cate_product','brand_product','all_product')); //2

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
