<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    use HasFactory;

    protected $table = 'year';


    protected $fillable = [
        'company_id','start_date','end_date'
    ];

    protected $casts = [

        'start_date' => 'date',
        
        'end_date' => 'date',

    ];
}
