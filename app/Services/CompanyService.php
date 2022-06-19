<?php

namespace App\Services;

use App\Models\Company;

class CompanyService{

    public function store($request){


        $company = new Company;

        $company->company_name = $request->companyName;

        $company->company_group_id = $request->companyGroupId;

        $company->save();
    }

}