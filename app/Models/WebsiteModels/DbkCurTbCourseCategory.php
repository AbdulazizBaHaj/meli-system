<?php

namespace App\Models\WebsiteModels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DbkCurTbCourseCategory extends Model
{
    use HasFactory;

    protected $table = 'dbk_cur_tbcoursecategory';
    protected $primaryKey = null;
    public $incrementing = false;
}
