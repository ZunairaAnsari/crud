<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class studentController extends Controller
{
    public function index(){
        $students = Student::all();
        return view('welcome', compact('students'));
    }

    public function create(){
        return view('register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:students,email',
            'password' => 'required',
            'status' => 'required',
            'position' => 'required',
            'title' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // this method is to use upload file in storage folder
    
        // $imageName = null;
        // if ($request->hasFile('image')) {
        //     $path = $request->file('image')->store('public/images');
        //     $imageName = basename($path);
        // }
        
        // this method is to use upload file in public folder

        $imageName = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imageName = rand(0000, 9999) . '.' . $file->getClientOriginalExtension();
            $path = public_path('assets/images');
            $file->move($path, $imageName);
        }
    
        Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'image' => $imageName,
            'status' => $request->status,
            'position' => $request->position,
            'title' => $request->title,
        ]);
    
        return redirect()->route('index')->with('success', 'Student created successfully.');
    }
    
    
    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $search = $request['search'] ?? "";
        if ($search != ""){
            $students = student::where('name', 'like', '%'.$search.'%')
                ->orWhere('email', 'like', '%'.$search.'%')
                ->orWhere('position', 'like', '%'.$search.'%')
                ->orWhere('title', 'like', '%'.$search.'%')
                ->get();
        }
        else{
            $students = student::all();
        }
        return view('show', compact('students', 'search'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $student = student::where('id', $id)->first();
        return view('edit', ['student' => $student]);
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, string $id)
    // {
    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|string|email|max:255',
    //         'password' => 'required|string|max:255',
    //         'status' => 'required',
    //         'position' => 'required',
    //         'title' => 'nullable|string|max:255',
    //         'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    //     ]);
    
    //     $student = student::findOrFail($id);
    
    //     $student->name = $request->input('name');
    //     $student->email = $request->input('email');
    //     $student->password = $request->input('password');
    //     $student->status = $request->input('status');
    //     $student->position = $request->input('position');
    //     $student->title = $request->input('title');
    
    //     if ($request->hasFile('image')) {
    //         // Delete old image if exists
    //         if ($student->image) {
    //             Storage::disk('public')->delete('images/' . $student->image);
    //         }
    //         // Store new image
    //         $path = $request->file('image')->store('images', 'public');
    //         $student->image = basename($path);
    //     }
    
    //     $student->save();
    
    //     return redirect()->route('show')->with('success', 'Updated successfully');
    // }
    public function update(Request $request, string $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255',
        'password' => 'nullable|string|max:255', // Allowing nullable for password
        'status' => 'required',
        'position' => 'required',
        'title' => 'nullable|string|max:255',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $student = Student::findOrFail($id);

    $student->name = $request->input('name');
    $student->email = $request->input('email');

    // Update password only if it's provided
    if ($request->filled('password')) {
        $student->password = bcrypt($request->input('password'));
    }

    $student->status = $request->input('status');
    $student->position = $request->input('position');
    $student->title = $request->input('title');

    // Handle image upload
    if ($request->hasFile('image')) {
        // Delete old image if exists
        if ($student->image) {
            $oldImagePath = public_path('assets/images/' . $student->image);
            if (File::exists($oldImagePath)) {
                File::delete($oldImagePath);
            }
        }

        // Handle new image upload
        $file = $request->file('image');
        $imageName = rand(0000, 9999) . '.' . $file->getClientOriginalExtension();
        $destinationPath = public_path('assets/images');
        $file->move($destinationPath, $imageName);

        $student->image = $imageName;
    }

    $student->save();

    return redirect()->route('show')->with('success', 'Updated successfully');
}



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = student::findOrFail($id);
        $student->delete();
        return redirect()->route('show')->withSuccess('Student deleted successfully');
    }

}
