<?php

namespace App\Http\Controllers\WebsiteControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WebsiteModels\CmsCategoryProgram;

class CategoryProgramController extends Controller
{
    public function getAllRecords()
    {
        $records = CmsCategoryProgram::all();
        return $records;
    }
}
