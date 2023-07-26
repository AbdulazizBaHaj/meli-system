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

    public function stylizeLastWord($text)
    {
        $words = explode(' ', $text);
        $lastWord = array_pop($words);
        $styledText = implode(' ', $words) . ' <span class="red-span">' . $lastWord . '</span>';
        return $styledText;
    }

    public function getAboutData()
    {
        $aboutData = CmsGeneral::select(
            'about_p1_heading',
            'about_p1_text',
            'about_p1_image',
            'about_p2_heading',
            'about_p2_text',
            'about_p2_image'
        )->first();

        return $aboutData;
    }
}
