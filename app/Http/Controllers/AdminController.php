<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminRequest;
use App\Models\Admin;
use App\Models\AdminMeta;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        return 'admin';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        return view('admin.show',compact('admin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {

        return view('admin.edit',compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(AdminRequest $request, Admin $admin)
    {  
        if($admin->meta)
        {
            $admin->meta->update($request->except('url'));
        } else {
            AdminMeta::create($request->except('url'));
        }

        /* For update image profile */
        if($admin->image) 
        {
            if($file = $request->file('url'))
            {
                $url = time() . $file->getClientOriginalName();
                $file->move(public_path('storage/images'),$url);
                unlink($admin->image->url);               
                $admin->image->update([
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
                    'imageable_id'=>$admin->id,
                    'imageable_type' => 'Admin',
                ]);                
            }
        }
       
        return back()
            ->with('message','پروفایل شما ویرایش شد!'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }

    public function login(Request $request)
    {
        if(auth('admin')->attempt(['name'=>$request->name,'password'=>$request->password]))
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
        return redirect()->route('admin.login')->with('message','You succefuly logout');
    }

    public function changePassword(Request $request)
    {
        
        $admin = Auth::user();
       
        if(auth('admin')->attempt(['name'=>$admin->name,'password'=>$request->input('oldPassword')]))
        {
            $admin->update([
                'password'=> bcrypt($request->input('newPassword')),
            ]);
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect('/login/admin')
                ->with('message','رمز عبور شما با موفقیت تغییر کرد1');
        }
    }
}
