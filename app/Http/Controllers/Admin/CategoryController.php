<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class   CategoryController extends Controller
{

    protected $appends = [
        'getParentsTree'
    ];

    public static function getParentsTree($category,$title){
        if($category->parent_id == 0){
            return $title;
        }
        $parent = Category::find($category->parent_id);
        $title = $parent->title . ' > '. $title;

        return CategoryController::getParentsTree($parent,$title);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataList = DB::table('categories')->get();
        return view('admin.category',['dataList'=>$dataList]);
    }

    /**
     * Show the form for creating a new resource.
     *  
     * @return \Illuminate\Http\Response
     */
    public function create(Request  $request)
    {
        $title = $request->input('title');

        DB::table('categories')->insert([
            'parent_id' => $request->input('parent_id'),
            'title' => $request->input('title'),
            'keywords' => $request->input('keywords'),
            'description' => $request->input('description'),
            'status' => $request->input('status'),
            'slug' => $request->input('slug')
            ]);

        return redirect()->route('admin_category');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        $dataList = DB::table('categories')->get();
        // print_r($dataList);exit(0);  //Kontrol
        return view('admin.category_add',['dataList'=>$dataList]);
    }


    /**
     * Show the form for editing the specified resource.
     *
    * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category,$id)
    {
        $data = Category::find($id);
        //$dataList = Category::with('children')->get();
        $dataList = DB::table('categories')->get()->where('parent_id',0);
        //return view('admin.category_edit',['data'=>$data,'dataList'=>$dataList]);
        return view('admin.category_edit',['data'=>$data,'dataList'=>$dataList]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category,$id)
    {
        $data = Category::find($id);
        $data->parent_id = $request->input('parent_id');
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->slug = $request->input('slug');
        $data->status = $request->input('status');
        $data->save();
        return redirect()->route('admin_category');
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
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category,$id)
    {
        DB::table('categories')->where('id','=',$id)->delete();
        return redirect()->route('admin_category');
    }
}
