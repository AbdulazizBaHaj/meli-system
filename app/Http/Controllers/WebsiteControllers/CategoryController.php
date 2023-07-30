<?php

namespace App\Http\Controllers\WebsiteControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WebsiteModels\DbkCurTbcategory;

class CategoryController extends Controller
{
    public function getCategory()
    {
        $categories = DbkCurTbcategory::all();
        return $categories;
    }
}
