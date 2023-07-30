<?php

namespace App\Http\Controllers\WebsiteControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WebsiteModels\DbkCurTbCertificationCourse;

class CertificationCourseController extends Controller
{
    public function getAllCertificationCourses()
    {
        $certificationCourses = DbkCurTbCertificationCourse::all();
        return $certificationCourses;
    }
}
