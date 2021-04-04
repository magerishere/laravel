<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\UserRequest;
use App\Models\Image;
use App\Models\User;
use App\Models\UserMeta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('user.show',compact('user'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('user.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, User $user)
    {
        if($user->meta)
        {
            $user->meta->update($request->except('url'));
        } else {
            UserMeta::create($request->except('url'));
        }

        /* For update image profile */
        if($user->image) 
        {
            if($file = $request->file('url'))
            {
                $url = time() . $file->getClientOriginalName();
                $file->move(public_path('storage/images'),$url);
                unlink($user->image->url);               
                $user->image->update([
                    'url'=>$url,
                ]);                
            }
        } else {
            if($file = $request->file('url'))
            {
                $url = time() . $file->getClientOriginalName();
                $file->move(public_path('storage/images'),$url);
                Image::create([
                    'url'=>$url,
                    'imageable_id'=>$user->id,
                    'imageable_type' => 'user',
                ]);                
            }
        }
       
        return back()
            ->with('message','پروفایل شما ویرایش شد!'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    public function login(Request $request)
    {
        if(Auth::attempt(['name'=>$request->name,'password'=>$request->password]))
        {
            $request->session()->regenerate();
            return redirect()->route('post.index')->with('message','خوش آمدید!');
        }
        return redirect()->back()->with('error','نام کاربری یا رمزعبور اشتباه است!');  
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')->with('message','با موفقیت خارج شدید!');
    }

    public function changePassword(ChangePasswordRequest $request)
    {
        
        $user = Auth::user();
        
        if(Auth::attempt(['name'=>$user->name,'password'=>$request->input('oldPassword')]))
        {
            $user->update([
                'password'=> bcrypt($request->input('newPassword')),
            ]);
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect('/login/user')
                ->with('message','رمز عبور شما با موفقیت تغییر کرد!');
        }
        return back()
            ->with('error','رمز عبور اشتباه است!');
    }
}
