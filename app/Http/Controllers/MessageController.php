<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userId = Auth::id();
        $messages = Message::where('to',$userId)->get();
        return view('user.message.index',compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.message.write');
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
        Message::create([
            'from' => $userId,
            'to' => $request->input('id'),
            'body'=>$request->input('body')
        ]);
        return back()
            ->with('message','ارسال شد!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        return view('user.message.show',compact('message'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        //
    }

    public function search(Request $request)
    {
        $user = Auth::user(); // current user logged
        $users = User::where('name','like','%' . $request->search . '%')->where('name','!=',$user->name)->get();
        return response()->json(['users'=>$users]);
    }

    public function getImageUser(Request $request)
    {
        $image = Image::find($request->id);
        if($image) 
        {
            return response()->json(['url'=>$image->url]);
        }
        return response()->json(['url'=>'storage/images/man-avatar.jfif']);
    }

    public function multiSend(Request $request)
    {
        $userId = Auth::id();
        foreach($request->ids as $id) 
        {
            Message::create([
                'from' => $userId,
                'to' => $id,
                'body' => $request->body,
            ]);
        }
        Session::flash('message','پیام شما ارسال شد!');
    }
}
