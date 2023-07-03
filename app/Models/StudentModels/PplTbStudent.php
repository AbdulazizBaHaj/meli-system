<?php

namespace App\Models\StudentModels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PplTbStudent extends Model
{
    use HasFactory;

    protected $table = 'ppl_tbstudent';

    protected $fillable = [
        'UniqueNumber',
        'Password',
        'FirstName',
        'LastName',
        'Email',
        'Mobile',
        'Company',
        'EMADNumber',
        'ReceiveMarketingEmails',
        'IsActive',
        'IsDeleted',
        'LastUpdatedOn',
        'LastUpdatedBy',
        'CreatedOn',
        'CreatedBy',
    ];
}
