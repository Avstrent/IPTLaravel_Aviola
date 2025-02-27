<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ClassroomStudentsController extends Controller
{
    /**
     * Assign a student to a classroom.
     */
    public function assignStudent($classroom_id, $student_id)
    {
        return response()->json(['message' => "Assign route accessed for classroom ID: $classroom_id, student ID: $student_id"]);
    }

    /**
     * Remove a student from a classroom.
     */
    public function removeStudent($classroom_id, $student_id)
    {
        return response()->json(['message' => "Remove route accessed for classroom ID: $classroom_id, student ID: $student_id"]);
    }
}