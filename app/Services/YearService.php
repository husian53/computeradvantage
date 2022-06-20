<?php

namespace App\Services;

use App\Models\Year;

class YearService{

    public function store($companyId,$request){

         $year = new Year;

         $year->company_master_id = $companyId;

         $year->year_start = $request->start;

         $year->year_end = $request->end;

         $year->save();
    }
}