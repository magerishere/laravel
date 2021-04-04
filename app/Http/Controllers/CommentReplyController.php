<?php

namespace App\Http\Controllers;

use App\Models\CommentReply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\URL;

class CommentReplyController extends Controller
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
        $userId = Auth::id();
        CommentReply::create([
            'user_id' => $userId,
            'comment_id' => $request->input('comment_id'),
            'body' => $request->input('body'),
        ]);

        $url = URL::previous();
        return redirect($url . '#replyComment')->with('message','جواب شما ارسال شد! پس از تایید نمایش داده میشود!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CommentReply  $commentReply
     * @return \Illuminate\Http\Response
     */
    public function show(CommentReply $commentReply)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CommentReply  $commentReply
     * @return \Illuminate\Http\Response
     */
    public function edit(CommentReply $commentReply)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CommentReply  $commentReply
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CommentReply $commentReply)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CommentReply  $commentReply
     * @return \Illuminate\Http\Response
     */
    public function destroy(CommentReply $commentReply)
    {
        //
    }

    public function like($id)
    {
        $userId = Auth::id();
        // if user didn't like comment
        if(Redis::zScore('likes',"user:$userId:comment-reply:$id"))
        {   
            Redis::zIncrBy('likes',-1,"comment-reply:$id");
            Redis::zRem('likes',"user:$userId:comment-reply:$id");
        } else { // if user like  comment
            Redis::zIncrBy('likes',1,"comment-reply:$id");
            Redis::zAdd('likes',1,"user:$userId:comment-reply:$id");
            if(Redis::zScore('dislikes',"user:$userId:comment-reply:$id"))
            {
                Redis::zIncrBy('dislikes',-1,"comment-reply:$id");
                Redis::zRem('dislikes',"user:$userId:comment-reply:$id");
            }
        }
        $url = URL::previous();
        return redirect($url . "#postComments");

    }

    public function dislike($id)
    {
        $userId = Auth::id();
        // if user didn't dislike comment
        if(Redis::zScore('dislikes',"user:$userId:comment-reply:$id"))
        {   
            Redis::zIncrBy('dislikes',-1,"comment-reply:$id");
            Redis::zRem('dislikes',"user:$userId:comment-reply:$id");
        } else { // if user dislike comment
            Redis::zIncrBy('dislikes',1,"comment-reply:$id");
            Redis::zAdd('dislikes',1,"user:$userId:comment-reply:$id");
            if(Redis::zScore('likes',"user:$userId:comment-reply:$id"))
            {
                Redis::zIncrBy('likes',-1,"comment-reply:$id");
                Redis::zRem('likes',"user:$userId:comment-reply:$id");
            }
        }

        $url = URL::previous();
        return redirect($url . "#postComments");

    }
}
