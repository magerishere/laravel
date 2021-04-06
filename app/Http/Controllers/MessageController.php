<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessageRequest;
use App\Jobs\MessageSenderJob;
use App\Models\Image;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Session;

class MessageController extends Controller
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
        $userId = Auth::id();
        $messages = Message::orderByDesc('created_at')->where('to',$userId)->whereHas('User',function($query) {
            $query->where('name','like','%' . $this->search . '%');
        })->paginate($this->value);
        if($this->search == '') Redis::zAdd('messages',$messages->total(),"messageCount:user:$userId");
        $messages->withPath('/message?search=' . $this->search . '&value=' . $this->value);
        return view('user.message.index',compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.message.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MessageRequest $request)
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

        $userId = Auth::id();
        if(!Redis::zScore('messages',"message:$message->id:read:$userId")) {
            Redis::zAdd('messages',1,"message:$message->id:read:$userId");
        }
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
        return view('user.message.edit',compact('message'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(MessageRequest $request, Message $message)
    {
        $message->update($request->all());
        return back()
            ->with('message','پیام شما ویرایش شد!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        $message->delete();
        return back()
            ->with('error','پیام به زباله دان انتقال داده شد!');
    }

    public function multiDestroy(Request $request)
    {
        foreach($request->ids as $id)
        {
            $message = Message::find($id);
            $message->delete();
        }

        Session::flash('error','پیام های انتخاب شده به زباله دان انتقال داده شدند!'); /* Session error for set background red! */     
    }

    public function multiRead(Request $request)
    {
        foreach($request->ids as $id)
        {
            Redis::zAdd('messages',1,"message:$id:read");
        }
        Session::flash('message','پیام های انتخاب شده به خوانده شده تبدیل شدند!');   
    }
    
    public function multiUnread(Request $request)
    {
        foreach($request->ids as $id)
        {
            Redis::zRem('messages',"message:$id:read");
        }
        Session::flash('message','پیام های انتخاب شده به خوانده نشده تبدیل شدند!');
    }

    public function search(Request $request)
    {
        $user = Auth::user(); // current user logged
        $users = User::where('name','like','%' . $request->search . '%')->where('name','!=',$user->name)->get();
        return response()->json(['users'=>$users]);
    }

    public function getImageUser(Request $request)
    {
        $image = Image::where(['imageable_id'=>$request->id])->where('imageable_type','App\Models\User')->first();
        if($image) 
        {
            return response()->json(['url'=>$image->url]);
        }
        return response()->json(['url'=>'storage/images/man-avatar.jfif']);
    }

    public function multiSend(MessageRequest $request)
    {
        $userId = Auth::id();
        if($request->timer == 0) {
                Message::create([
                    'from' => $userId,
                    'to' => $request->names,
                    'body' => $request->body,
                    ]);
            
            Session::flash('message','پیام شما ارسال شد!');
        } else {
            MessageSenderJob::dispatch($userId,$request->names,$request->body)
            ->delay(now()->addHours($request->timer));
            Session::flash('message','پیام شما در بازه زمانی مشخص ارسال میشود!');
        }

    }


    /* For update message to important/unimportant */
    public function important(Request $request)
    {
        $userId = Auth::id();
        if(Redis::zScore('messages',"message:$request->id:important:$userId")) 
        {
            Redis::zRem('messages',"message:$request->id:important:$userId");
        } else {
            Redis::zAdd('messages',1,"message:$request->id:important:$userId");
        }
        return response()->json(['status'=>200]);
    }

    public function multiImportant(Request $request)
    {
        foreach($request->ids as $id)
        {
            Redis::zAdd('messages',1,"message:$id:important");
        }
        Session::flash('message','پیام های انتخاب شده به پیام مهم تبدیل شدند!');
    }

    public function multiNotImportant(Request $request)
    {
        foreach($request->ids as $id)
        {
            Redis::zRem('messages',"message:$id:important");
        }
        Session::flash('message','پیام های انتخاب شده به پیام غیرمهم تبدیل شدند!');
    }

    public function trash() 
    {
        $userId = Auth::id();
        $messages = Message::orderByDesc('deleted_at')->onlyTrashed()->where('to',$userId)->whereHas('User',function($query) {
            $query->where('name','like','%' . $this->search . '%');
        })->paginate($this->value);
        Redis::zAdd('messages',$messages->total(),"messageTrashCount:user:$userId");
        $messages->withPath('/message/all/trash?search=' . $this->search . '&value=' . $this->value);
        return view('user.message.trash',compact('messages'));
    }

    public function trashDelete($id)
    {
        $message = Message::onlyTrashed()->where('id',$id)->first();
        if(!$message) $message = Message::find($id);
        $message->forceDelete();
        Session::flash('error','پیام حذف شد!');
    }


    public function multiTrashDelete(Request $request)
    {
        foreach($request->ids as $id)
        {
            $message = Message::onlyTrashed()->where('id',$id)->first();
            if(!$message) $message = Message::find($id);
            $message->forceDelete();
        }
        Session::flash('error','پیام های انتخاب شده حذف شدند!'); 
    }

    public function restore($id) 
    {
      $message =  Message::onlyTrashed()->where('id',$id)->first();
      $message->restore();
        return back()
            ->with('message','پیام بازگردانی شد!');
    }

    public function multiRestore(Request $request)
    {
        foreach($request->ids as $id)
        {
            $message = Message::onlyTrashed()->where('id',$id)->first();
            $message->restore();
        }
        Session::flash('message','پیام های انتخاب شده بازگردانی شدند!');
    }

    public function sended()
    {
        $userId = Auth::id();
        $messages = Message::orderByDesc('created_at')->where('from',$userId)->paginate($this->value);
        Redis::zAdd('messages',$messages->total(),"messageSendedCount:user:$userId");
        return view('user.message.sended',compact('messages'));
    }
}
