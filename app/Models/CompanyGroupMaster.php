<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;


class CompanyGroupMaster extends BaseModel
{
    use HasFactory;
    protected $table = 'company_group_master';
    protected $fillable = [
        'company_group_id', 'company_group_name'
    ];
   
}
