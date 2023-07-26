<?php

namespace App\Http\Controllers\WebsiteControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WebsiteModels\CmsGeneral;

class ContactController extends Controller
{
    public function showContact()
    {
        $contactInfo = CmsGeneral::select(
            'contact_phone',
            'contact_email',
            'contact_address'
        )->first();

        return view('website-views.contact-us', ['contactInfo' => $contactInfo]);
    }
}
