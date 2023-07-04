<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function get(Course $model)
    {
        return view('pages.course', ['courses' => $model->get()]);
    }

    public function store(Request $request)
    {
        $course = new Course;
        $course->title = $request['title'];
        $course->subject = $request['type'];
        $course->description = $request['description'];
        $course->save();
        $request->session()->flash('success', 'Course added successfully');
        return redirect()->back();
    }
}
