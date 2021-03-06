<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;


class CompanyGroup extends BaseModel
{
    use HasFactory;
    protected $table = 'company_group';
    protected $fillable = [
        'company_group_id', 'company_group_name'
    ];
   
}
