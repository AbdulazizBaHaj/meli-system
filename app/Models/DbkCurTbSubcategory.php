<?php

namespace App\Models\WebsiteModels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DbkCurTbSubcategory extends Model
{
    use HasFactory;

    protected $table = 'dbk_cur_tbsubcategory';
    protected $primaryKey = 'SubCategoryID';
}
