<?php

namespace App\Models\WebsiteModels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CmsCertificationProgram extends Model
{
    use HasFactory;

    protected $table = 'cms_certificationprogram';
    protected $primaryKey = null;
    public $incrementing = false;
}
