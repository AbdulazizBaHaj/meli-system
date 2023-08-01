<?php

namespace App\Http\Controllers\WebsiteControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WebsiteModels\DbkCurTbCertification;

class CertificationController extends Controller
{
    public function getAllCertifications()
    {
        $certifications = DbkCurTbCertification::all();
        return $certifications;
    }
}
