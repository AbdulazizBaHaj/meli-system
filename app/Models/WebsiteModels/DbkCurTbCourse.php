<?php

namespace App\Models\WebsiteModels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DbkCurTbCourse extends Model
{
    use HasFactory;

    protected $table = 'dbk_cur_tbcourse';
    protected $primaryKey = 'CourseID';
}
