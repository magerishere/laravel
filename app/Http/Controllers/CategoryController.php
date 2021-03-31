<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
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
        $categories = Category::all();
        return view('admin.category.index',compact('categories'));
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
       $category = Category::create($request->all());
        return back()
            ->with(['message'=>"دسته بندی ایجاد شد. #$category->id",'category_id'=>$category->id]);
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
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $category->update($request->all());

        return back()
            ->with(['message'=>"دسته بندی ویرایش شد. #$category->id",'category_id'=>$category->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return back()
            ->with(['error'=>'دسته بندی حذف شد!','restoreUrl'=>'category.restore','restore_id'=>$category->id]); /* Session error for set background danger! */
    }

    /* Restore the specified resource from storage. */
    public function restore($id)
    {
        Category::withTrashed()->where('id',$id)->restore();
        return back()
            ->with(['message'=>"دسته بندی بازگردانی شد. #$id",'category_id'=>$id]);
    }

    /* Remove all selected resource from storage. */
    public function multiDelete(Request $request)
    {
        foreach($request->input('ids') as $id)
        {
            $category = Category::find($id);
            $category->delete();
        }
        Session::flash('error','موارد انتخاب شده حذف شدند!'); /* Session error for set background red! */
    }

    public function trash()
    {
        $categories = Category::onlyTrashed()->get();
        return view('admin.category.trash',compact('categories'));
    }
}
