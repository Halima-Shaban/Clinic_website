<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\RegisterRequest;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use App\Traits\ApiResponseTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function register(RegisterRequest $request)
    {

        $data = $request->validated();
        $create_user = User::create($data);

        if (!$create_user) {
            return ApiResponseTrait::errorResponse("There Is An Error", 500);
        }

        return ApiResponseTrait::successResponse("Created Successfulluy", 201);


    }


    public function logIn(LoginRequest $request)
    {
        $data = $request->validated();

        if (!Auth::attempt($data)) {
            return ApiResponseTrait::errorResponse("Invalid Email Or Password", 500);

        }

        $user = Auth::user();
        $token = $user->createToken("Client_token")->plainTextToken;
        $data = [
            "token" => $token,
            "user" => $user,
        ];
        return ApiResponseTrait::successResponse($data, "Loged In Successfuly", 200);

    }


    public function showProfile()
    {
        $user = Auth::user();
        return ApiResponseTrait::successResponse($user, "Getting Profile Successfuly", 200);

    }

    public function AdminLogin(LoginRequest $request)
    {
        $data = $request->validated();
        if (!Auth::guard('admin')->attempt($data)) {
            return ApiResponseTrait::errorResponse("Invalid Email Or Password", 500);

        }
        $admin = Auth::guard('admin')-> user();
        // dd();
        $token = $admin->createToken("$admin->name _token")->plainTextToken;
        $data = [
            "token" => $token,
            "user" => $admin,
        ];
        return ApiResponseTrait::successResponse($data, "Admin Loged In Successfuly", 200);

    }
}
