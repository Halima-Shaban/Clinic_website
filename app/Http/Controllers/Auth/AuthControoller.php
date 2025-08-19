<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RigesterRequest;
use App\Models\User;

class AuthControoller extends Controller
{
    public function loginForm(){
        return view("auth.login");
    }


    public function registerForm(){
        return view("auth.register");
    }


    public function login(Request $request){

    }

    public function register(RigesterRequest $request){
        // dd($request->all());
        $data = $request->validated();
        // dd($data['image']); 
        if(isset($data['image'])){
            $image_ext = $data['image']->getClientOriginalExtension();
            $imageName = time() .'-User.' .$image_ext;
        //     $data['image']->move(public_path('front/assets/images/users',$imageName));
        //     $data['image']= $imageName ?? 'default.jpg';
             // dd($imageName);
           $user=User::create($data);
           if ($user) {
            return to_route('login')->with('success','Account Created Successfully');
           }

            return back()->with('error','Faild To  Create Account');


        }


    }
    
}
