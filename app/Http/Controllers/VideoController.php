<?php

namespace App\Http\Controllers;

use App\Models\Video; // Assuming your model is named Video
use App\Models\Course;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Course $course)
    {
            
        $videos = $course->videos; // الفيديوهات المرتبطة بالكورس
        $allVideos = Video::all();
        $courses = Course::all();
                                     // جميع الفيديوهات من قاعدة البيانات
        
        return view('admin.video', [
            'videos' => $videos, 
            'course' => $course,
            'allVideos' => $allVideos,
            'courses' => $courses,// تمرير جميع الفيديوهات إلى العرض
        ]);
    }
    // public function index(Course $course)
    //     {
    //         $videos = $course->videos()->with('course')->get(); 
    //         $allVideos = Video::with('course')->get();
    //         $courses = Course::all(); 

    //         return view('admin.video', [
    //             'videos' => $videos, 
    //             'course' => $course,
    //             'allVideos' => $allVideos,
    //             'courses' => $courses
    //         ]);
    //     }

    public function indexshow($courseId)
        {
            // استرجاع جميع الفيديوهات المرتبطة بالكورس المحدد
            $videos = Video::where('course_id', $courseId)->get();

            // تمرير البيانات إلى الصفحة
            return view('videos.videos', compact('videos'));
        }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Course $course)
    {
        return view('admin.videos', compact('course')); // Use the same view for create
    }

    /**
     * Store a newly created resource in storage.
     */
   // في ملف VideosController.php

        // public function store(Request $request, Course $course) // استخدم Route Model Binding هنا
        // {
        //     dd($request->all());
        //     $request->validate([
        //         'url' => 'required|string',
        //     ]);

        //     $video = new Videos(); // تأكد من استخدام اسم النموذج الصحيح (Video)
        //     $video->course_id = $course->id; 
        //     $video->url = $request->url;
        //     $video->save();
            
        //     return redirect()->route('videos.index', $course)->with('success', 'تمت إضافة الفيديو بنجاح.');
        // }


        public function store(Request $request)
        {
            // dd($request->all());
            $request->validate([
                'url' => 'required|string',
                'course_id' => 'required|integer', // تأكد من صحة نوع البيانات
            ]);
            
            $video = new Video();
            $video->course_id = $request->course_id;
            $video->url = $request->url;
            $video->save();
        
            return redirect()->route('videos.index')->with('success', 'تمت إضافة الفيديو بنجاح.');
        }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Video $video)
    {
        return view('admin.videos', compact('video')); // Use the same view for edit
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Video $video)
    {
        $request->validate([
            'url' => 'required|string',
        ]);

        $video->url = $request->url;
        $video->save();

        return redirect()->route('videos.index', $video->course)->with('success', 'تم تعديل الفيديو بنجاح.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Video $video)
    {
        $video->delete();
        return redirect()->route('videos.index', $video->course)->with('success', 'تم حذف الفيديو بنجاح.');
    }
}