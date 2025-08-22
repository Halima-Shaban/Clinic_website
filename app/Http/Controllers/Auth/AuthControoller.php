<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RigesterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthControoller extends Controller
{
    public function loginForm(){
        return view("auth.login");
    }


    public function registerForm(){
        return view("auth.register");
    }


    public function login(LoginRequest $request){
        $data=$request->validated();

        // dd($request->all());
        if (Auth::guard('admin')-> attempt($data)) {
            return to_route('admin.dashbourd')->with('success','Welcome Admin');
        }

        if (Auth::guard('web')-> attempt($data)) {
            return to_route('home')->with('success','Welcome User');
        }

        return back()->withErrors('email', 'The Provided Cradential Do Not Mach Our Record.');

    }

    public function register(RigesterRequest $request){
        // dd($request->all());
        $data = $request->validated();
        // dd($data['image']); 
        if(isset($data['image'])){
            $image_ext = $data['image']->getClientOriginalExtension();
            $imageName = time() .'-User.' .$image_ext;
            $data['image']->move(public_path('front/assets/images/users',$imageName));
            $data['image']= $imageName ?? 'default.jpg';
             // dd($imageName);
           $user=User::create($data);
           if ($user) {
            return to_route('auth.login')->with('success','Account Created Successfully');
           }

            return back()->with('error','Faild To  Create Account');


        }


      


    }

      public function logout(){
            Auth::guard('admin')->logout();
            Auth::guard('web')->logout();
            return to_route('home')->with('success','Log Out Successfully');
        }
    
}
