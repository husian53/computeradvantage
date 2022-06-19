<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends BaseModel
{
    use HasFactory;
    protected $table = 'company_master';
    protected $fillable = [
        'company_group_id','company_name','company_master_id'
    ];
}
