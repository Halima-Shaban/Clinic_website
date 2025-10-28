<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateMajorRequest;
use App\Http\Resources\MajorResource;
use App\Models\Major;
use App\Traits\ApiResponseTrait;
use Illuminate\Http\Request;
use Symfony\Component\Console\Tester\ApplicationTester;

class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $majors = Major::withCount("doctors")->get();
        $data = MajorResource::collection($majors);


        return ApiResponseTrait::successResponse($data, "Majors Retrived Successfully", 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateMajorRequest $request)
    {
        $data = $request->validated();

        if ($request->has('image')) {
            $imageName = uploadImage($data['image'], 'majors');
        }
        $data['image'] = $imageName ?? "default.png";

        $major = Major::create($data);


        if (!$major) {
            return ApiResponseTrait::errorResponse("There Is Error |500", 500);

        }
        $data = new MajorResource($major);
        return ApiResponseTrait::successResponse($data, "Major Created Successfuly ", 200);


    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {

        $major = Major::where("slug", $slug)->first();
        if (!$major) {
            return ApiResponseTrait::errorResponse("Not Found", 404);

        }
        $major = new MajorResource($major);
        return ApiResponseTrait::successResponse($major, "Major Retrived ", 200);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $slug)
    {
        $major = Major::where('slug', $slug)->first();

        if (!$major) {
            return ApiResponseTrait::errorResponse("Not Found", 404);
        }

        if ($major->image !== 'default.jpg' && $major->image !== null) {
            $imagePath = public_path('front/assets/images/majors/' . $major->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $major->delete();
        return ApiResponseTrait::successResponse("Major Deleted Successfuly ", 200);

    }
}
