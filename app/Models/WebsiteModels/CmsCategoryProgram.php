<?php

namespace App\Models\WebsiteModels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CmsCategoryProgram extends Model
{
    use HasFactory;

    protected $table = 'cms_categoryprogram';
    protected $primaryKey = null;
    public $incrementing = false;
}
