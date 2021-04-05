<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
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
        $value = 10;
        $search = '';
        /* Pagination handler */
        if(isset($_GET['value']))
        {
            $value = $_GET['value'] > 100 ? 100 : $_GET['value'];
        }

        /* Search handler */
        if(isset($_GET['search']))
        {
            $search = $_GET['search'];
        }

        $categories = Category::orderByDesc('id')->where('name','like','%' . $search . '%')->whereNull('parent_id')->paginate($value);
        $categories->withPath('/category?search=' . $search . '&value=' . $value); 
       
        return view('user.category.index',compact('categories'));
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
    public function store(CategoryRequest $request)
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
        /* Child of parent category */
        $categories = Category::where('parent_id',$category->id)->get();
        return view('user.category.parent',compact('category','categories'));
       
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
    public function update(CategoryRequest $request, Category $category)
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

     /* Multi soft delete resource from storage. */
     public function multiDestroy(Request $request)
     {
         foreach($request->input('ids') as $id)
         {
             $category = Category::find($id);
             $category->delete();
         }
         Session::flash('error','موارد انتخاب شده حذف شدند!'); /* Session error for set background red! */
     }



    /* Restore the specified resource from storage. */
    public function restore($id)
    {
        Category::withTrashed()->where('id',$id)->restore();
        return back()
            ->with(['message'=>"دسته بندی بازگردانی شد. #$id",'category_id'=>$id]);
    }

      /* Multi restore selected resource from storage. */
      public function multiRestore(Request $request)
      {
          foreach($request->ids as $id)
          {
              $category = Category::onlyTrashed($id)->first();
              $category->restore();
          }
          Session::flash('message','مطالب انتخاب شده بازگردانی شدند!');
      }


    /* Show trash resource from storage. */
    public function trash()
    {
        $categories = Category::onlyTrashed()->get();
        return view('user.category.trash',compact('categories'));
    }

    /* Trash delete resource from storage. */
    public function trashDelete($id)
    {
        $category = Category::onlyTrashed()->where('id',$id)->first();
        $category->forceDelete();
        if(!$category->parent_id)
        {
            $categories = Category::where('parent_id',$id)->get();
            foreach($categories as $child)
            {
                $child->forceDelete();
            }
        }
        return back()
            ->with('error','مطلب حذف شد!');
    }

    /* Multi trash delete selected resource from storage. */
    public function multiTrashDelete(Request $request)
    {
        foreach($request->ids as $id)
        {
            $category = Category::onlyTrashed()->where('id',$id)->first();
            $category->forceDelete();
            if(!$category->parent_id)
            {
                $categories = Category::where('parent_id',$id)->get();
                foreach($categories as $child)
                {
                    $child->forceDelete();
                }
            }
        }
   
        Session::flash('error','مطالب انتخاب شده حذف شدند!');
    }

    /* Show all child of parent category resource from storage. */
    public function parent($id)
    {
        $categories = Category::where('parent_id',$id)->get();
        return response()->json(['categories'=>$categories]);
        
    }

}
