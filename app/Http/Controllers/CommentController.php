<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\URL;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        Comment::create([
            'user_id' => auth()->user()->id,
            'body' => $request->input('body'),
            'commentable_id' => $request->input('post_id'),
            'commentable_type' => 'Post',
        ]);
        $url = URL::previous();

        return redirect($url . '#replyComment')
            ->with('message','نظر شما ارسال شد و پس از تایید نمایش داده میشود!');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
    }

    public function like($id)
    {
        $userId = Auth::id();
        // if user didn't like comment
        if(Redis::zScore('likes',"user:$userId:comment:$id"))
        {   
            Redis::zIncrBy('likes',-1,"comment:$id");
            Redis::zRem('likes',"user:$userId:comment:$id");
        } else { // if user like  comment
            Redis::zIncrBy('likes',1,"comment:$id");
            Redis::zAdd('likes',1,"user:$userId:comment:$id");
            if(Redis::zScore('dislikes',"user:$userId:comment:$id"))
            {
                Redis::zIncrBy('dislikes',-1,"comment:$id");
                Redis::zRem('dislikes',"user:$userId:comment:$id");
            }
        }
        $url = URL::previous();
        return redirect($url . "#postComments");

    }

    public function dislike($id)
    {
        $userId = Auth::id();
        // if user didn't dislike comment
        if(Redis::zScore('dislikes',"user:$userId:comment:$id"))
        {   
            Redis::zIncrBy('dislikes',-1,"comment:$id");
            Redis::zRem('dislikes',"user:$userId:comment:$id");
        } else { // if user dislike comment
            Redis::zIncrBy('dislikes',1,"comment:$id");
            Redis::zAdd('dislikes',1,"user:$userId:comment:$id");
            if(Redis::zScore('likes',"user:$userId:comment:$id"))
            {
                Redis::zIncrBy('likes',-1,"comment:$id");
                Redis::zRem('likes',"user:$userId:comment:$id");
            }
        }

        $url = URL::previous();
        return redirect($url . "#postComments");

    }
}
