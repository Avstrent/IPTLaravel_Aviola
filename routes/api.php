<?php 

use App\Http\Controllers\TeachersController;
use App\Http\Controllers\ClassroomsController;
use App\Http\Controllers\GradesController;
use App\Http\Controllers\ParentsController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\ClassroomStudentsController;
use App\Http\Controllers\Exam_TypesController;
use App\Http\Controllers\ExamsController;
use App\Http\Controllers\Exam_ResultsController;
use App\Http\Controllers\AttendanceController;


Route::apiResource('teachers', TeachersController::class);
Route::apiResource('classrooms', ClassroomsController::class);
Route::apiResource('grades', GradesController::class);
Route::apiResource('parents', ParentsController::class);
Route::apiResource('students', StudentsController::class);
Route::apiResource('courses', CoursesController::class);
Route::apiResource('classroomStudents', ClassroomStudentsController::class);
Route::apiResource('examtypes', Exam_TypesController::class);
Route::apiResource('exam', ExamsController::class);
Route::apiResource('examResult', Exam_ResultsController::class);
Route::apiResource('examAttendance', AttendanceController::class);