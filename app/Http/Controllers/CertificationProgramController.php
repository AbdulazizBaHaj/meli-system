<?php

namespace App\Http\Controllers\WebsiteControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WebsiteModels\CmsCertificationProgram;

class CertificationProgramController extends Controller
{
    public function getAllRecords()
    {
        $records = CmsCertificationProgram::all();
        return $records;
    }
}
