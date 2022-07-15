<?php

namespace App\Services;

use App\Models\Year;

class YearService{

    public function store($companyId,$request){

         $year = new Year;

         $year->company_id = $companyId;

         $year->start_date = $request->start;

         $year->end_date = $request->end;

         $year->save();
    }
}