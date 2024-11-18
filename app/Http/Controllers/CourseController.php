<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::all();
        return view('admin.course', ['courses' => $courses]); 
    }
    

    // If you need a separate method to display courses on the welcome page
    public function indexshow()
    {
        $courses = Course::all();
        return view('taleem-welcome', ['courses' => $courses]); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.courses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
   
    // public function store(Request $request)
    //     {
    //         $request->validate([
    //             'title' => 'required|string',
    //             'description' => 'required|string',
    //             'price' => 'required|numeric',
    //             'is_active' => 'required|boolean',
    //             'image_paht' => 'nullable|image|mimes:jpeg,png,jpg,gif,jfif|max:2048' // Add validation for the image
    //         ]);

    //         if ($request->hasFile('image')) {
    //             $imagePath = $request->file('image')->store('course_images', 'public'); 
    //         } else {
    //             $imagePath = null; 
    //         }

    //         Course::create([
    //             'title' => $request->title,
    //             'description' => $request->description,
    //             'price' => $request->price,
    //             'is_active' => $request->is_active,
    //             'image_path' => $imagePath, // Store the image path in the database
    //         ]);

    //         return redirect()->route('courses.index')
    //             ->with('success', 'تم إضافة الدورة بنجاح.');
    //     }      
   

    public function store(Request $request)
    {
        $request->validate([ 
    
            'title' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'is_active' => 'required|boolean',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,jfif|max:2048' // التحقق من الصورة
        ]);
    
        // إنشاء سجل الدورة بدون الصورة أولاً
        $course = Course::create([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'is_active' => $request->is_active,
        ]);

    
        // إذا تم رفع صورة، قم بتخزينها وتحديث سجل الدورة
        if ($request->hasFile('image')) {
            // تخزين الصورة في القرص العام (يمكنك تغيير القرص إلى آخر)
            $imagePath = $request->file('image')->store('course_images', 'public');
    
            // تحديث سجل الدورة بمسار الصورة
            $course->update(['image_path' => $imagePath]);
        }
        
    
        return redirect()->route('courses.index')->with('success', 'تم إضافة الدورة بنجاح.');
    }

        /**
         * Display the specified resource.
         */
        public function show(Course $course) // Use Route Model Binding 
        {
            return view('admin.courses.show', compact('course'));
        }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course) // Use Route Model Binding
    {
        return view('admin.courses.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        $request->validate([
            'title' => 'required|string', // Assuming 'title' is a single string
            'description' => 'required|string', // Assuming 'description' is a single string
            'price' => 'required|numeric',
            'is_active' => 'required|boolean',
        ]);

        $course->update($request->all());

        return redirect()->route('courses.index')
            ->with('success', 'تم تعديل الدورة بنجاح.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course) 
    {
        $course->delete();

        return redirect()->route('courses.index')
            ->with('success', 'تم حذف الدورة بنجاح.');
    }
}
