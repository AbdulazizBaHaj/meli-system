<?php

namespace App\Http\Controllers\WebsiteControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WebsiteModels\DbkCurTbCourseCategory;

class CourseCategoryController extends Controller
{
    public function getAllRecords()
    {
        $records = DbkCurTbCourseCategory::all();
        return $records;
    }
}
