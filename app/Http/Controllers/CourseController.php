<?php

namespace App\Http\Controllers\WebsiteControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WebsiteModels\DbkCurTbCourse;

class CourseController extends Controller
{
    public function getAllCourses()
    {
        $courses = DbkCurTbCourse::all();
        return $courses;
    }
}
