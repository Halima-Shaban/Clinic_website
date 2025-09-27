<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateMajorRequest;
use App\Http\Requests\UpdateMajorRequest;
use App\Models\Major;
use Illuminate\Http\Request;

class AdminMajorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //

        $majors = Major::query()->withCount('doctors');

        if ($request->filled('search')) {
            $majors->where('name', 'like', '%' . $request->search . '%');
        }

        $majors = $majors->latest()->paginate(10);

        return view('admin.pages.majors.index', [
            'majors' => $majors,
            'search' => $request->search
        ]);
    }



    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        //
        return view('admin.pages.majors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateMajorRequest $request, Major $major)
    {
        //
        $data = $request->validated();
        if ($request->hasFile('image')) {
            # code...

            $imageName = uploadImage($data['image'], 'majors');
            $data['image'] = $imageName;
        }

        $major->create($data);
        return redirect()->route('admin.major.index')->with('success', 'Major Created Successfully');
    }




    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Major $major)
    {
        //
        return view('admin.pages.majors.edit', compact('major'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMajorRequest $request, Major $major)
    {
        //
        $data = $request->validated();
        if ($request->hasFile('image')) {
            # code...

            $imageName = uploadImage($data['image'], 'majors');
            $data['image'] = $imageName;
        }
        $major->update($data);
        return redirect()->route('admin.major.index')->with('success', 'Major Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
