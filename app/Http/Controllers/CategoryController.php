<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider = Slider::orderBy('slider_id','DESC')->take(3)->get();
        $category = Category::whereNull('category_id')->with('childrenCategories')->get();
        // $cate_chill = Category::with('children')->get();
        // array(
        //     'id'=> 1,
        //     'category_name' => 'BALO NAM',
        //     'children' => [
        //         0 => [
        //             'id' => 3,
        //             'category_name' => 'Balo du lịch'
        //             ],
        //           1 => [
        //             'id' => 4,
        //             'category_name' => 'Balo học sinh'
        //             ]
        //     ]

        //           );
                  
        return view('pages.category.show_cate')->with('category',$category)->with('slider',$slider);
    }

    public function show_all(){
        $all_category = Category::paginate(5);
    	$category_product  = view('admin.all_category')->with('all_category',$all_category);
    	return view('admin_layout')->with('admin.all_category', $category_product);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cate_child = Category::all();
        return view('admin.add_category')->with('cate_child',$cate_child);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            'category_name' =>'required',
        ]);
        $data = $request->all();
        Category::create($data);
    	Session::put('message','Thêm danh mục sản phẩm thành công');
    	return Redirect::to('all-category');
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
