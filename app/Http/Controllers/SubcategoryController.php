<?php

namespace App\Http\Controllers\WebsiteControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WebsiteModels\DbkCurTbSubcategory;

class SubcategoryController extends Controller
{
    public function getAllSubcategories()
    {
        $subcategories = DbkCurTbSubcategory::all();
        return $subcategories;
    }
}
