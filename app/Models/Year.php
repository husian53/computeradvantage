<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    use HasFactory;

    protected $table = 'year_master';

    protected $primaryKey = 'year_master_id';

    protected $fillable = [
        'company_master_id','year_start','year_end'
    ];

    protected $casts = [

        'year_start' => 'date',
        
        'year_end' => 'date',

    ];
}
