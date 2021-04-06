<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Category;
use App\Models\Image;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
 
    private $value = 10;
    private $search = '';

    public function __construct()
    {
        /* Pagination handler */
        if(isset($_GET['value']))
        {
            $this->value = $_GET['value'] > 100 ? 100 : $_GET['value'];
        }
        /* Search handler */
        if(isset($_GET['search']))
        {
            $this->search = $_GET['search'];
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderByDesc('created_at')->where('title','like','%' . $this->search . '%')->paginate($this->value);
        $posts->withPath('/post?search=' . $this->search . '&value=' . $this->value); 
        return view('user.post.index',compact('posts'));    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('user.post.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
      
       $post = Post::create($request->only('title','description'));
        DB::table('category_post')
        ->insert(['post_id'=>$post->id,'category_id'=>$request->input('name')]);
       if($file = $request->file('url')) /* Image */
       {
           $url = time() . $file->getClientOriginalName();
           $file->move(public_path('storage/images'),$url);
           Image::create([
               'url'=>$url,
               'imageable_id'=>$post->id,
               'imageable_type'=> 'Post',
            ]);
        }
        return redirect()
        ->route('post.index')
        ->with(['message'=>"مطلب ایجاد شد. #$post->id",'post_id'=>$post->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('user.post.show',compact('post'));
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::all();
        return view('user.post.edit',compact('post','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, Post $post)
    {
        $post->update($request->only('title','description'));
        DB::table('category_post')
            ->where('post_id',$post->id)
            ->update(['category_id'=>$request->input('name')]);
        if($file = $request->file('url'))
        {
            if($post->image) 
            {
                $url = time() . $file->getClientOriginalName();
                $file->move(public_path("storage/images"),$url);
                $post->image->update([
                    'url'=>$url,
                ]);
            } else {
                $url = time() . $file->getClientOriginalName();
                $file->move(public_path("storage/images"),$url);
                Image::create([
                    'url'=>$url,
                    'imageable_id'=>$post->id,
                    'imageable_type'=>'Post',
                ]);

            }
        }
        return redirect()
            ->route('post.index')
            ->with(['message'=>"مطلب ویرایش شد. #$post->id",'post_id'=>$post->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return back()
            ->with(['error'=>'مطلب حذف شد.','restoreUrl'=>'post.restore','restore_id'=>$post->id]); /* Session error for set background danger! */
    }

     /* Remove all selected resource from storage. */
     public function multiDestroy(Request $request)
     {
         foreach($request->ids as $id)
         {
             $post = Post::find($id);
             $post->delete();
         }

         Session::flash('error','مطالب انتخاب شده حذف شدند!'); /* Session error for set background red! */     
    }

    /* Restore the specified resource from storage. */
    public function restore($id)
    {

        Post::onlyTrashed()->where('id',$id)->restore();
        return redirect()
            ->route('post.index')
            ->with(['message'=>"مطلب بازگردانی شد. #$id",'post_id'=>$id]);
    }

    public function multiRestore(Request $request)
    {
        foreach($request->ids as $id)
        {
            $post = Post::onlyTrashed()->where('id',$id)->first();
            $post->restore();
        }
        Session::flash('message','مطالب انتخاب شده بازگردانی شدند!');
    }

    /* Trash for all soft delete resource from storage. */
    public function trash()
    {
        $posts = Post::orderByDesc('deleted_at')->onlyTrashed()->where('title','like','%' . $this->search . '%')->paginate($this->value);
        $posts->withPath('/post?search=' . $this->search . '&value=' . $this->value); 
        return view('user.post.trash',compact('posts'));
    }

    /* Force delete single resource from storage. */
    public function trashDelete($id)
    {
        $post = Post::onlyTrashed()->where('id',$id)->first();
        if($post->image)
        {
            unlink($post->image->url);
        }
        $post->forceDelete();
        return back()
            ->with('error','مطلب حذف شد!');
    }

    /* Force delete multi resource from storage. */
    public function multiTrashDelete(Request $request)
    {
        foreach($request->ids as $id)
        {
            $post = Post::onlyTrashed()->where('id',$id)->first();
            if($post->image)
            {
                unlink($post->image->url);
            }
            $post->forceDelete();
        }
        Session::flash('error','مطالب انتخاب شده حذف شدند!'); 
    }
   
}
