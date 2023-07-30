<?php

namespace App\Models\WebsiteModels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DbkCurTbCertification extends Model
{
    use HasFactory;

    protected $table = 'dbk_cur_tbcertification';
    protected $primaryKey = 'CertificationID';
}
