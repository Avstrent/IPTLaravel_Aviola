<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class ExamResultsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(['message' => 'Index route accessed']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return response()->json(['message' => 'Store route accessed']);
    }

    /**
     * Display the specified resource.
     */
    public function show($exam_id, $student_id, $course_id)
    {
        return response()->json(['message' => "Show route accessed for Exam ID: $exam_id, Student ID: $student_id, Course ID: $course_id"]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $exam_id, $student_id, $course_id)
    {
        return response()->json(['message' => "Update route accessed for Exam ID: $exam_id, Student ID: $student_id, Course ID: $course_id"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($exam_id, $student_id, $course_id)
    {
        return response()->json(['message' => "Destroy route accessed for Exam ID: $exam_id, Student ID: $student_id, Course ID: $course_id"]);
    }
}