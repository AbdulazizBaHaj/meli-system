<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\WebsiteModels\CmsGeneral;

class CmsGeneralSeeder extends Seeder
{
    public function run()
    {
        CmsGeneral::create([
            'contact_phone' => '+966 12 345 6789',
            'contact_email' => 'info@meli-system.com',
            'contact_address' => 'Jeddah, Saudi Arabia',
            'about_p1_heading' => 'Welcome to MELI',
            'about_p1_text' => 'Your about text here',
            'about_p1_image' => 'images/about1.jpg',
            'about_p2_heading' => 'Our Mission',
            'about_p2_text' => 'Your mission text here',
            'about_p2_image' => 'images/about2.jpg'
        ]);
    }
}
